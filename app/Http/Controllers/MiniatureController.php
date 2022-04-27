<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
Use \Carbon\Carbon;

class MiniatureController extends Controller
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


        return view('main.miniature',['dataJoin'=> $dataJoin]);

    }


    public function pro($name){
        $mutable = Carbon::now();
        $date = $mutable->toDateString('M d Y'); 
        
        $user = DB::table('won_prizes')
        ->whereDate('created_at', $date) 
        ->orderBy('id', 'DESC') 
        ->get(); 
        return view('main.program' , ['user'=> $user , 'name'=>$name]);

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
        //
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
