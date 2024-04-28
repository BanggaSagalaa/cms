<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function loginPost(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            $id = Auth::user()->id;
            $type = Auth::user()->type;
            session(['user_id' => $id, 'type' => $type]);


            return redirect('dashboard');
        } else {
            return back()->with('error', 'Invalid Credentials');
        }
    }

    public function destroy(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
