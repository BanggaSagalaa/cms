<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ReceiptController extends Controller
{
    public function index(){
        return view('receipt');
    }

    public function index2($id){
        $financial = DB::table('financial')->join('church', 'financial.church_id', '=', 'church.id')
        ->select('financial.id as financial_id', 'financial.amount as financial_amount', 'financial.date_received as financial_date_received', 'church.id as church_id', 'church.address as church_address')->where('financial.id', $id)->first();
        return view('receipt', ['financial' => $financial]);
    }
}
