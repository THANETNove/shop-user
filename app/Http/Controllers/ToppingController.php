<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
Use \Carbon\Carbon;

class ToppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $user = DB::table('won_prizes') 
        ->orderBy('id', 'DESC') 
        ->get();

        $mutable = Carbon::now();
        $mutable1 = Carbon::now()->addMinute(3);
        $date = $mutable->toDateString('M d Y');
        $dateTime1 = $mutable->toTimeString();
        $dateTime2 = $mutable1->toTimeString();
        $newDate_1 = date('Y-m-d H:i:s',strtotime('0 minutes',strtotime($dateTime1)));



      

        $countBay1 = DB::table('won_prizes')
        ->where('nameShop',$name)
        ->whereDate('created_at', $date)
         ->whereTime('created_at', '<=',   $newDate_1) 
        ->count();

    

                if ($countBay1 !== 0) {

                    $bay1 = DB::table('won_prizes')
                    ->where('nameShop',$name)
                    ->whereDate('created_at', $date)
                    /*  ->whereTime('created_at', '>=',   $newDate_2) */
                     ->whereTime('created_at', '<=',   $newDate_1)
                     ->orderBy('id', 'DESC')
                    ->get();
    
                  $number =   $bay1[0]->time_number;
                }else{
                  $number = "ยังไม่ได้เปิด";
                }



        return view('main.topping' , ['user'=> $user , 'name'=>$name,'number'=>$number]);
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
