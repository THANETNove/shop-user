<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Bonus;

class BonusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('bonuses')
        ->count();
        
        return view('main.bonus',);
    

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
        
        $data = new Bonus;
        $data->bonus = $request->bonus;
        $data->percent = $request->percent;
       
        $data->save();

        return redirect('/bonus')->with('status',"เพิ่มสำเร็จเเล้ว");
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
        
        $user = DB::table('bonuses')
        ->where('id',$id)
        ->get(); 

        return view('main.editBonus' ,['user'=> $user]);
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
        
        $data = Bonus::find($id);
        $data->bonus = $request->bonus;
        $data->percent = $request->percent;
        $data->save();
        

        return redirect('/priceCom')->with('status',"บันทึกข้อมูล");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       /*  $user = DB::table('bonuses')
        ->count();
        if ($user === 0){
            
            return view('main.bonus');                     
        }else{
            $user1 = DB::table('bonuses')
                ->where('id',1)    
                ->get(); 

          return view('main.editBonus' ,['user1'=>$user1]);
            
        } */
    }
    public function priceCom()
    {
        
        $user = DB::table('bonuses')
        ->get();
        
        return view('main.priceCom',['user'=>$user]);
    }

}
