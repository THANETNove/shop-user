<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
Use \Carbon\Carbon;
use App\Models\WonPrize;
use DateTime;


class WonPrizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $mutable = Carbon::now();
        $date = $mutable->toDateString('M d Y');
        $user = DB::table('won_prizes') 
        ->whereDate('created_at',  $date) 
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
        $mutable = Carbon::now();
        $date = $mutable->toDateString('M d Y');
        $user = DB::table('won_prizes')
        ->where('nameShop',$name)
        ->whereDate('created_at',  $date) 
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
        $newDateTime = Carbon::now()->addMinute(5);
        $date1 = $newDateTime->toDateTimeString();
        $id =  Auth::user()->id;
        
        /* หา user */
        $user = DB::table('won_prizes') 
                ->where('nameShop',$request->nameShop)
                ->orderBy('id', 'DESC')
                ->count();
        

      
        if($user !== 0){
              /*  หาวันที่ */
        $user1 = DB::table('won_prizes') 
                ->where('nameShop',$request->nameShop)
                ->max('id');

        $user2 = DB::table('won_prizes') 
                ->where('nameShop',$request->nameShop)
                ->where('id', $user1)
                ->get();

        $user3 = $user2[0]->created_at;
        $newDate = date('Y-m-d H:i:s',strtotime('5 minutes',strtotime($user3)));

            $data = new WonPrize;
            $data->time_number = $request->challenge;
            $data->won_prize = $request->size;
            $data->won_prize1 = $request->won_prize1;
            $data->nameShop = $request->nameShop;
            $data->countNameShop = $request->countNameShop;
            $data->created_at = $newDate;
            $data->updated_at = $newDate;
            $data->save();
            
        }else{

        $data = new WonPrize;
        $data->time_number = $request->challenge;
        $data->won_prize = $request->size;
        $data->won_prize1 = $request->won_prize1;
        $data->nameShop = $request->nameShop;
        $data->countNameShop = $request->countNameShop;
        $data->created_at = $date1;
        $data->updated_at = $date1;
        $data->save();

        } 
        
       

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
