<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('changepassword');
    }
    public function changePassword(Request $request){
        $code = $request->input('code');
        $password = $request->input('password');
        $confirmpassword = $request->input('confirmpassword');
        if ($password != $confirmpassword) {
            return back()->with('error', 'Password Not Match');
        }else{
            $credentials = [
                'password' => $password
            ];
            $credentials['password'] = bcrypt($credentials['password']);


            $existingUser = DB::table('users')->where('code', $code)->first();

            if ($existingUser) {
                DB::table('users')->where('code', $code)->update($credentials);
                return back()->with('success', 'Successfully Change Password');
            } else {
                return back()->with('error', 'Invalid Code');
            }



            

            
        }
    }
}
