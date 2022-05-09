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
        ->where('payment_status', null)
        ->orderBy('id', 'DESC')
        ->get();
        
        return view('product.stock',['user'=> $user]);
    }

    public function index_buy()
    {
        $user = DB::table('product_shops')
        ->orderBy('id', 'DESC')
        ->where('payment_status','!=', null)
        ->get();
        
        return view('product.stock_Buy',['user'=> $user]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = DB::table('users')
        ->where('is_idadmin', "0")
        ->get();

        return view('product.add_product',['user' => $user]);
    }
 
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    

       $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            // generate a pin based on 2 * 7 digits + a random character
            $pin = mt_rand(1000000, 9999999)
                . mt_rand(1000000, 9999999)
                .$characters[rand(0, strlen($characters))];
          $text =  $characters[rand(0, strlen($characters))];

        $string = str_shuffle($pin);


        //ทำการตัด string ตามจำนวนที่ใส่เข้ามา
       /*  $resultChar = substr($str);  */
    
    $Product_code = $text.''.$string;
    
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
       $data->status_user = $request->status_user;
       $data->store = $request->store;
       $data->picture = $full_path;
       $data->Product_code = $Product_code;
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
        $pro = DB::table('product_shops')
        ->where('id',$id)
        ->get(); 
        $user = DB::table('users')
        ->where('is_idadmin', "0")
        ->get();
        return view('product.editStock' ,['pro'=>$pro ,'user'=> $user]);
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
