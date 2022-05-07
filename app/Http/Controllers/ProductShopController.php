<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\ProductShop;

class ProductShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('product_shops')
        ->get();
        
        return view('main.stock',['user'=> $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       
        return view('main.add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ProductShop;
        $data->store = $request->store;
        $data->picture = $request->picture;
        $data->Product_code = $request->Product_code;
        $data->price = $request->price;
        $data->percent = $request->percent;
        $data->income = $request->income;
        $data->save();

        return redirect('/stock')->with('status',"เพิ่มสำเร็จเเล้ว");
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
        $user = DB::table('product_shops')
        ->where('id',$id)
        ->get(); 
        return view('main.editStock' ,['user'=> $user]);
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
        $data = ProductShop::find($id);
        $data->store = $request->store;
        $data->picture = $request->picture;
        $data->Product_code = $request->Product_code;
        $data->price = $request->price;
        $data->percent = $request->percent;
        $data->income = $request->income;
        $data->save();

        return redirect('/stock')->with('status',"เพิ่มสำเร็จเเล้ว");
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
