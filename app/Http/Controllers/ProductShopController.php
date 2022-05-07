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
    

     $service_image = $request->file('picture');

        //Generate ชื่อภาพ
      $name_gen=hexdec(uniqid());

      //ดึงนามสกุลไฟล์ภาพ
      $img_ext = strtolower($service_image->getClientOriginalExtension());           
      $img_name = $name_gen.'.'.$img_ext;
      
      //อัพโลหดและบันทึกข้อมูล
      $upload_location = 'image/stock/';
      $full_path = $upload_location.$img_name;
      $service_image->move($upload_location,$img_name);

       $data = new ProductShop;
       $data->store = $request->store;
       $data->picture = $full_path;
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


        
        $service_image = $request->file('picture');
        //Generate ชื่อภาพ
      $name_gen=hexdec(uniqid());

      //ดึงนามสกุลไฟล์ภาพ
      $img_ext = strtolower($service_image->getClientOriginalExtension());           
      $img_name = $name_gen.'.'.$img_ext;
      
      //อัพโลหดและบันทึกข้อมูล
      $upload_location = 'image/stock/';
      $full_path = $upload_location.$img_name;
      $service_image->move($upload_location,$img_name);

        $data = ProductShop::find($id);
        $data->store = $request->store;
        $data->picture = $full_path;
        $data->Product_code = $request->Product_code;
        $data->price = $request->price;
        $data->percent = $request->percent;
        $data->income = $request->income;

        
        $data->save();

        return redirect('/stock')->with('status',"ข้อมูลเรียบร้อย");
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
