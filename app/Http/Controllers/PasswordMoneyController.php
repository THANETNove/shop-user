<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use App\Models\PasswordMoney;

class PasswordMoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('password_money.index');
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
        $request->validate([
            'password' => 'required|max:6|min:6',
        ]);
       
        $data = new PasswordMoney;
        $data->password_modey = $request->password;
        $data->idUser = Auth::user()->id;
         $data->save();   

        $passwordcount = DB::table('password_money')
            ->where('idUser','=',Auth::user()->id)  
            ->count();

            if ($passwordcount != "0") {
                $passwordMoney = DB::table('password_money')
                ->where('idUser','=',Auth::user()->id)  
                ->get();
                Session::put('passMoney', $passwordMoney[0]->id); 
            }
    

        return redirect('/set-up')->with('status',"ตั้ง Password เรียบร้อย");
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
       
        return view('password_money.edit',['id' => $id]);
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
        $request->validate([
            'password' => 'required|max:6|min:6',
        ]);
       
        $data = PasswordMoney::find($id);
        $data->password_modey = $request->password;
        $data->save();

        $passwordcount = DB::table('password_money')
        ->where('idUser','=',Auth::user()->id)  
        ->count();

        if ($passwordcount != "0") {
            $passwordMoney = DB::table('password_money')
            ->where('idUser','=',Auth::user()->id)  
            ->get();
            Session::put('passMoney', $passwordMoney[0]->id); 
        }


    return redirect('/set-up')->with('status',"ตั้ง Password เรียบร้อย");
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
