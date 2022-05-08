<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level_User;
use DB;

class Level_UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $name = $request->search;


        $user = DB::table('users')
        ->leftJoin('level__users', 'users.id', '=', 'level__users.user')
        ->where('users.is_idadmin',"0")
        ->where('users.username', 'LIKE', '%' . $name . '%')  
        ->select('level__users.*', 'users.*')
        ->get(); 
        return view('level.levelUser.index',['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = DB::table('users')
        ->leftJoin('level__users', 'users.id', '=', 'level__users.user')
        ->where('users.is_idadmin',"0")
        ->where('users.username', 'LIKE', '%' . $name . '%')  
        ->select('level__users.*', 'users.*')
        ->get(); 
        return view('level.levelUser.index',['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $data = new Level_User;
        $data->vip =  $request->status_vip;
        $data->user =   $request->userid;
        $data->save();
        return redirect('/level_user')->with('status',"เพิ่ม  $request->status_vip ให้  $request->user สำเร็จเเล้ว ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $user = DB::table('users')
            ->where('id',$id)
            ->get(); 
        $levels = DB::table('levels')
            ->get(); 

        return view('level.levelUser.add_vip',['user' => $user,'levels'=>$levels]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('users')
        ->where('users.id',$id)
        ->rightJoin('level__users', 'users.id', '=', 'level__users.user')
        ->select('users.*', 'level__users.*')
        ->get(); 

    $levels = DB::table('levels')
        ->get(); 

    return view('level.levelUser.edit_vip',['user' => $user,'levels'=>$levels]);
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
        $data = Level_User::find($id);
        $data->vip =  $request->status_vip;
        $data->save();
        return redirect('/level_user')->with('status',"เเก้ไข  $request->status_vip ให้  $request->user สำเร็จเเล้ว ");
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
