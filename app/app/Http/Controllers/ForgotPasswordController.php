<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ForgotPasswordController extends Controller
{
    public function index(){
        return view('forgotpassword');
    }
    public function sendEmail(Request $request)
    {
        $email = $request->input('email');
        $code = rand(0000000,9999999);

        $credentials = [
            'code' => $code,
        ];

        $subject = 'Change Password';
        $message = 'Code:'. $code;

        $mail = new PHPMailer(true);

        try {

            $existingUser = DB::table('users')->where('email', $email)->exists();

            if ($existingUser) {
                $mail->SMTPDebug = SMTP::DEBUG_OFF; // Enable verbose debug output
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'sorar384@gmail.com';
                $mail->Password = 'ukjqeppzrfugeqgx';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                //Recipients
                $mail->setFrom('sorar384@gmail.com', 'Sorar');
                $mail->addAddress($email);

                // Content
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $message;

                $mail->send();

                DB::table('users')->where('email', $email)->update($credentials);

                return redirect('changepassword');
            } else {
                return redirect('forgotpassword')->with('error', 'Invalid Email');
            }
            
            
        } catch (Exception $e) {
            return redirect('forgotpassword')->with('success', $mail->ErrorInfo);
        }
    }
}
