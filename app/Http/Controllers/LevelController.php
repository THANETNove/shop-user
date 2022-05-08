<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use DB;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $level = DB::table('levels')  
        ->get();  
        return view('level.index',['level' => $level]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('level.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vip = "VIP " .''.$request->vip;
        $data = new Level;
        $data->vip =  $vip;
        
        $data->save();
        return redirect('/level')->with('status',"เพิ่ม  $vip สำเร็จเเล้ว ");
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
        $level = DB::table('levels')
        ->where('id',$id)
        ->get(); 
        return view('level.edit',['level' => $level]);
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
        
        $data = Level::find($id);
        $data->vip =  $request->vip;
        $data->save();
        return redirect('/level')->with('status'," เเก้ไข   $request->vip สำเร็จเเล้ว ");
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
