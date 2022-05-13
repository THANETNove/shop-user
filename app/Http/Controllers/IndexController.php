<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\ProductShop;
use App\Models\User;
use App\Models\AddMoneyUsers;
use App\Models\Up_Image_Mouey;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkLogin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('product_shops')
        ->where('status_user', Auth::user()->id)
        ->whereNull('payment_status')
        ->get();
        return view('index.shop_index',['user'=> $user]);

    }

    public function topUp()
    {
        $amounts = DB::table('top__up__amounts')
        ->get();
        return view ('top_up.topUp',['amounts'=>$amounts]);
    }
    
    
    public function save($id)
    {
        $withdrawMoney = $id;
        $data = new AddMoneyUsers;
        $data->id_user =  Auth::user()->id;
        $data->money= $withdrawMoney;
        $data->bonus	= null;
        $data->status_bonus = null;
        $data->save();

        $user = DB::table('bank_books')
        ->get();
        return view ('index.up_Image',['idAmounts'=> $data->id,'user'=>$user]); 
     
    }


    public function upImage(Request $request)
    {



    $service_image = $request->file('upImage');
        //Generate ชื่อภาพ
      $name_gen=hexdec(uniqid());

      //ดึงนามสกุลไฟล์ภาพ
      $img_ext = strtolower($service_image->getClientOriginalExtension());           
      $img_name = $name_gen.'.'.$img_ext;
      
      //อัพโลหดและบันทึกข้อมูล
      $upload_location = 'image/slip/';
      $full_path = $upload_location.$img_name;
      $service_image->move($upload_location,$img_name);


        $data = new Up_Image_Mouey;
        $data->idMoney	= $request->id;
        $data->idUser	= Auth::user()->id;
        $data->up_image	= $full_path;
        $data->save();


 
     
        return redirect ('topUp')->with('status',"อัพ ภาพสำเร็จ");; 
   
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

    public function buyShop($id)
    {

        $product_shops = DB::table('product_shops')
            ->where('id', $id)
            ->get();
         $price = $product_shops[0]->price;
         $income = $product_shops[0]->income;
         $Product_code = $product_shops[0]->Product_code;

        $user = DB::table('users')
        ->where('id', Auth::user()->id)
        ->get();
        $money = $user[0]->money;


        if ($money >=  $price) {

            /* ลบ จำนวนการเงิน ที่ชื้อไป */
            $moneyAll  = $money - $price;

            $moneyAll =   $moneyAll+$income;

            $user = User::find(Auth::user()->id);
            $user->money = $moneyAll;
            $user->save();


            $data = ProductShop::find($id);
            $data->payment_status = "ซื้อเเล้ว";
            $data->save();

        return redirect('/shop_index')->with('status'," ซื้อ สินค้า รหัส $Product_code สำเร็จเเล้ว ");

        }else {
            return back()->with('status',"จำนวนเงินไม่พอ กรุณาเติมเงินก่อน");
        }

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
        $user = DB::table('product_shops')
        ->where('id', $id)
        ->get();

      
        
        return view('index.buy_shop',['user'=> $user]);
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

    public function get_password()
    {
        $user = DB::table('password_money')
        ->where('idUser', Auth::user()->id)
        ->count();
  
        if ($user != 0) {
            $user = DB::table('password_money')
            ->where('idUser', Auth::user()->id)
            ->get();
            $pass= $user[0]->password_modey;
        }
        else {
            $pass= "null";
        }
       

        return response()->json($pass);
    }
}
