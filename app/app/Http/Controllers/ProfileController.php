<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){
        $user_id = session()->get('user_id');

        $data = DB::table('users')->where('id', $user_id)->get();
     
        return view('profile', ['data' => $data]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email'],
        ]);

        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
    
        $credentials = [
            'name' => $name,
            'email' => $email,
        ];


        $success = DB::table('users')->where('id', $id)->update($credentials);
    
        if ($success) {
            return back()->with('success', 'Successfully Update Profile');
        }

    }
}
