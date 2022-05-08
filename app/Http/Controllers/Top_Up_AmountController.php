<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Top_Up_Amount;
use DB;

class Top_Up_AmountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amounts = DB::table('top__up__amounts')
        ->get();

        return view('top_up_amount.index', ['amounts'=> $amounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('top_up_amount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = new Top_Up_Amount;
        $data->amount = $request->amount;
         $data->save();   



        return redirect('/top_up_amount')->with('status',"เพิ่ม จำนวนเงิน $request->amount เรียบร้อย");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $amounts = DB::table('top__up__amounts')
        ->where('id',$id)
        ->get();
        return view('top_up_amount.edit', ['amounts'=> $amounts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Top_Up_Amount::find($id);
        $data->amount = $request->amount;
        $data->save();
        return redirect('/top_up_amount')->with('status',"เเก้ไข จำนวนเงิน $request->amount เรียบร้อย");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $deleted = DB::table('top__up__amounts')->where('id', $id)->delete();

        return redirect('/top_up_amount')->with('status',"เเก้ไข จำนวนเงิน  เรียบร้อย");
    }
}
