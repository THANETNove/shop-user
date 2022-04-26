<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\WonPrize;


class WonPrizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $user = DB::table('won_prizes') 
        ->orderBy('id', 'DESC') 
        ->get(); 
        return view('main.won-prize',['user'=> $user]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($name)
    {
        
        $user = DB::table('won_prizes')
        ->where('nameShop',$name) 
        ->count();
         if ($user === 0) {
             
            $countNameShop = "1";
         
        }else{

            $countNameShop = $user+1;   

         }
       return view('main.challenge',['name'=>$name , 'countNameShop'=>$countNameShop]);
       

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
        $data = new WonPrize;
        $data->time_number = $request->challenge;
        $data->won_prize = $request->size;
        $data->won_prize1 = $request->won_prize1;
        $data->nameShop = $request->nameShop;
        $data->countNameShop = $request->countNameShop;

        $data->save();

        return Redirect()->back()->with('status',"เพิ่มสำเร็จเเล้ว");

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
