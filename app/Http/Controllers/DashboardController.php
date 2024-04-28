<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index(){
        $totalusers = DB::table('users')->where('type', 'Members')->orWhere('type', 'Treasurer')->orWhere('type', 'Auditor')->count();
        $totalchurch = DB::table('church')->count();
        $totalfinancial = DB::table('financial')->sum('amount');
        return view('dashboard', ['totalusers' => $totalusers, 'totalchurch' => $totalchurch, 'totalfinancial' => $totalfinancial]);
    }
}
