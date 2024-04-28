<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinancialController extends Controller
{
    public function index(){
        $financial = DB::table('financial')->join('church', 'financial.church_id', '=', 'church.id')
        ->select('financial.id as financial_id', 'financial.amount as financial_amount', 'financial.date_received as financial_date_received', 'church.id as church_id', 'church.address as church_address')->get();
        return view('financial', ['financial' => $financial]);
    }

    public function index2(){
       $church = DB::table('church')->get();
        return view('createfinancial', ['church' => $church]);
    }

    public function index3($id){
           $financial = DB::table('financial')
        ->join('church', 'financial.church_id', '=', 'church.id')
        ->select('financial.id as financial_id', 'financial.amount as financial_amount', 'financial.date_received as financial_date_received', 'church.id as church_id', 'church.address as church_address')
        ->where('financial.id', $id)
        ->first();
        $church = DB::table('church')->get();
        return view('createfinancial', ['financial' => $financial, 'church' => $church]);
    }

    public function map($id){
       $church = DB::table('church')->where('id',$id)->get();
        return view('map', ['church' => $church]);
    }

    public function create(Request $request){
        $church_id = $request->input('church_id');
        $amount = $request->input('amount');

        $financial_id = $request->input('financial_id');

        $data = [
            'church_id' => $church_id,
            'amount' => $amount,
        ];

        if (empty($financial_id)) {
            DB::table('financial')->insert($data);
            return redirect('financial')->with('success', 'Successfully Inserted');
        } else {
            DB::table('financial')->where('id',$financial_id)->update($data);
            return redirect('financial')->with('success', 'Successfully Updated');
        }

        

    }
}
