<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyOut;
use App\Models\User;
use Auth;
use DB;

class BuyOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataJoin = DB::table('won_prizes')
        ->rightJoin('buy_outs', 'won_prizes.time_number', '=', 'buy_outs.numberCount')
        ->where('buy_outs.userId', Auth::user()->id)
        ->orderBy('buy_outs.id', 'DESC')
        ->get();


        return view('main.reserve',['dataJoin'=> $dataJoin]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $id =  Auth::user()->id;
        $price =  $request->price;

        $data = new BuyOut;
        $data->product_name = $request->name;
        $data->finished_size = $request->size;
        $data->price = $price;
        $data->back_piece = $request->back_piece;
        $data->outgrowth = $request->outgrowth;
        $data->numberCount = $request->numberCount;
        $data->userId = $id;
        $data->save(); 

         $user = DB::table('users')
                 ->where('id', $id) 
                ->get();

       $moneyUser  =   (int)$user[0]->money; 
        $price  =   (int)$price;         
        $moneyPlup = $moneyUser - $price;
        
        $userMoney = User::find($id);
        $userMoney->money = $moneyPlup; 
        $userMoney->save(); 

        $moneyBnt = "ทำการซื้อสำเร็จเเล้ว";
       
        return response()->json($moneyBnt);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
