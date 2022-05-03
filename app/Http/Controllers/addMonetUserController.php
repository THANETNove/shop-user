<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AddMoneyUsers;
use Auth;
use DB;
class addMonetUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($request->all());
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
      $users = DB::table('users')
                    ->where('id',$id)                
                    ->get();

    

        $money  =  (int)$users[0]->money;
        $withdrawMoney = (int)$request->money;
        $moneyPlus   =  $money + $withdrawMoney;
        $data = User::find($id);
        $data->money = $moneyPlus;
        $data->save();

        $data = new AddMoneyUsers;
        $data->id_user = $id;
        $data->money= $withdrawMoney;
        $data->bonus	= null;
        $data->status_bonus = null;
        $data->save();

     
        return redirect('/money-user')->with('status',"เติมเงิน ให้ $request->username  จำนวน $request->money  บาท เเล้ว");
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
