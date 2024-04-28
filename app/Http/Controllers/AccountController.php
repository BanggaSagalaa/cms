<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index(){
       $account = DB::table('users')
        ->where('type', 'Auditor')
        ->orWhere('type', 'Treasurer')
        ->orWhere('type', 'Members')
        ->get();
        return view('account', ['account' => $account]);
    }

    public function index2(){
        return view('createaccount');
    }

    public function index3($id){
        $account = DB::table('users')
        ->where('id', $id)
        ->first(); // Use first() to retrieve a single record
    return view('createaccount', ['account' => $account]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required|string|max:255',
            'email' => ['required', 'email'],
        ]);

        $id = $request->input('id');
        $type = $request->input('type');
        $name = $request->input('name');
        $email = $request->input('email');

        $existingUser = DB::table('users')->where('email', $email)->exists();

        if (empty($id)) {
            $password = $request->input('password');
    
            $credentials = [
                'type' => $type,
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password),
            ];
            if ($existingUser) {
                return back()->withInput()->with('error', 'Email already exists');
            }
            $success = DB::table('users')->insert($credentials);
            return redirect('account')->with('success', 'Successfully created account');
        } else {
            $credentialsupdate = [
            'type' => $type,
            'name' => $name,
            'email' => $email,
        ];
            $success = DB::table('users')->where('id',$id)->update($credentialsupdate);

            return redirect('account')->with('success', 'Successfully updated account');
        }


    

    }
}
