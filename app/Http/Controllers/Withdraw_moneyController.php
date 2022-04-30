<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdraw_money;
use auth;
use DB;
Use \Carbon\Carbon;
use App\Models\User;
use App\Models\BuyOut;
use App\Models\Re_countNumber;


class Withdraw_moneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idUser =  Auth::user()->id;
        $withdraw = DB::table('bank_accounts')
                    ->rightJoin('withdraw_moneys', 'bank_accounts.id_user', '=', 'withdraw_moneys.idUser')
                     ->where('withdraw_moneys.idUser',$idUser)
                     ->orderBy('withdraw_moneys.id', 'DESC')  
                    ->get(); 

        $accounts  =  DB::table('bank_accounts')
                    ->where('bank_accounts.id_user',$idUser)  
                    ->count();

        $BankAccounts  =  DB::table('bank_accounts')
                    ->where('bank_accounts.id_user',$idUser)  
                    ->get(); 
    

        return view('main.withdraw_money',['withdraw' => $withdraw ,'accounts' => $accounts ,  'accounts' =>$accounts, 'BankAccounts' =>  $BankAccounts]);
    }

    public function reloadMoney()
    {

        $idUser =  Auth::user()->id;
        $withdraw = DB::table('users')
                     ->where('id',$idUser)  
                    ->get(); 
      $money = $withdraw[0]->money;
      $moneyBant = number_format( $money , 2 );
            return response()->json($moneyBant);
    }

    public function getNumber()
    {
        $idUser =  Auth::user()->id;

    
        $withdraw = DB::table('buy_outs')
                     ->where('userId',$idUser)
                    ->get();
           return response()->json($withdraw[0]->numberCount);
    }


    public function number_count(Request $request)
    {

        $data = Re_countNumber::find(1);
        $data->number_count = $request->number_count;
         $data->save(); 
         $withdraw = "บันทึกเรียบร้อย";
         return response()->json($withdraw);
    }

    public function getConut(Request $request)
    {
        $withdraw = DB::table('re_count_numbers')
                    ->where('id',1)
                    ->get();
        
  
         return response()->json($withdraw[0]->number_count);
    }



    public function getConutNumber(Request $request)
    {

     $mutable = Carbon::now();
     $mutable1 = Carbon::now()->addMinute(1);;
     $date = $mutable->toDateString('M d Y');
     $dateTime1 = $mutable->toTimeString();
     $dateTime2 = $mutable1->toTimeString();

    $newDate_1 = date('Y-m-d H:i:s',strtotime('0 minutes',strtotime($dateTime1))); //5:52:00
    $newDate_2 = date('Y-m-d H:i:s',strtotime('-3 minutes',strtotime($dateTime1))); //5:49:00
    
    $name_shop = $request->name_shop;

        $countWithdraw = DB::table('won_prizes')
                    ->where('nameShop',$name_shop)
                    ->whereDate('created_at', $date)
                    ->whereTime('created_at', '<=', $newDate_1) 
                    ->orderBy('id', 'DESC') 
                    ->count(); 
     

             if ($countWithdraw >= 2) { 
                 
                $bay1 = DB::table('won_prizes')
                        ->where('nameShop',$name_shop)
                         //->whereTime('created_at', '>=',   $newDate_2)  
                        ->whereTime('created_at', '<=', $newDate_1)
                        ->orderBy('id', 'DESC')
                        ->get();

            
                $bay01 =  $bay1[1]->won_prize;
                $bay02 =  $bay1[1]->won_prize1;
       
                }else{

                     $bay01 = "รอผล..";
                     $bay02 = "รอผล..";                
 
                }

        if ($countWithdraw != 0) {

            $withdraw = DB::table('won_prizes')
                    ->where('nameShop',$name_shop)
                     ->whereDate('created_at', $date)
                     /*  ->whereTime('created_at', '>=',   $dateTime2)   */
                     ->whereTime('created_at', '<=',   $newDate_1)
                     ->orderBy('id', 'DESC')  
                    ->select('won_prizes.time_number')
                    ->get();
            $withdraw =  $withdraw[0]->time_number;
        }else{

            $withdraw =  "รหัสสินค้า ยังไม่ได้เปิด";
        }

        $messge = [$withdraw,$bay01,$bay02];

         return response()->json($messge);
    }



/**
 * ! add  พ้อย เเละ ดึงยอดเงิน
 */
    public function byeConun(Request $request)
    {
     
      $mutable = Carbon::now();
        $mutable1 = Carbon::now()->addMinute(1);;
        $date = $mutable->toDateString('M d Y');
        $dateTime1 = $mutable->toTimeString();
        $dateTime2 = $mutable1->toTimeString();
        $dateTime3 =  $newDate_2 = date('Y-m-d H:i:s',strtotime('-4 minutes',strtotime($dateTime1)));
        $id =  Auth::user()->id;


        $buy_outs = DB::table('buy_outs')
                    ->whereNull('outgrowth')
                    ->where('userId',$id)
                    ->whereDate('created_at', $date)  
                    ->get();

        $won_prizes = DB::table('won_prizes')
                    ->whereDate('created_at','<=', $dateTime3)  
                    ->get();  

         $x = DB::table('products')
                    ->get(); 
            $x1 = $x[0]->x_1;
            $x2 = $x[0]->x_2;




             foreach($buy_outs as $user){
                $user_id =  $user->id;
                $user_number =  $user->numberCount;
                $user_product =  $user->product_name;
                $user_finished =  $user->finished_size;
                $user_back_piece =  $user->back_piece;
                $user_price =  $user->price;

                    foreach($won_prizes as $prizes){

                        $prizes_number =  $prizes->time_number;
                        $prizes_name =  $prizes->nameShop;
                        $prizes_prize =  $prizes->won_prize;
                        $prizes_prize1 =  $prizes->won_prize1;

                        if ($prizes_number ===  $user_number &&  $user_product === $prizes_name ) {

                                if ($prizes_prize ===  $user_finished &&  $user_back_piece === $prizes_prize1) {
                                    $money = DB::table('users')
                                                ->where('id',$id)
                                                ->get();
                                    $money_user =   $money[0]->money;

                                    $price =  $user_price * $x2;  
                                    $buy02 = BuyOut::find($user_id);
                                    $buy02->outgrowth = "ถูก รางวัล 2 คู่";
                                    $buy02->get_paid =  $price;
                                    $buy02->save();

                    
                                    $userMoney = User::find($id);
                                    $userMoney->money = $money_user + $price; 
                                    $userMoney->save(); 



                                } elseif ($prizes_prize ===  $user_finished ||  $user_back_piece === $prizes_prize1) {
                                 
                                    $money = DB::table('users')
                                                ->where('id',$id)
                                                ->get();
                              
                                    $money_user =   $money[0]->money;

                                        $price =  $user_price * $x1;  
                                        $buy02 = BuyOut::find($user_id);
                                        $buy02->outgrowth = "ถูก รางวัล 1 คู่";
                                        $buy02->get_paid =  $price;
                                        $buy02->save();

                        
                                        $userMoney = User::find($id);
                                        $userMoney->money = $money_user + $price; 
                                        $userMoney->save(); 

                                }else{
                                    $buy02 = BuyOut::find($user_id);
                                    $buy02->outgrowth = "ไม่ถูก รางวัล ";
                                    $buy02->get_paid =     "0";
                                    $buy02->save();
                                } 
                        }
                        
                    }     
                }

                $usersMoney = DB::table('users')
                    ->where('id',$id)
                    ->get();
                 return response()->json($usersMoney);
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
        $idUser =  Auth::user()->id;
        $users = DB::table('users')
        ->where('id',$idUser)                
        ->get();
        $money  =  (int)$users[0]->money;
        $withdrawMoney = (int)$request->withdrawMoney;
        

        if ($withdrawMoney  > $money ) {

            return Redirect()->back()->with('status',"ยอดเงินของคุณไม่พอในการถอน");

        }else{

            $request->validate([
                'withdrawMoney' => 'required|max:255',
            ]);
     
            $data =  new Withdraw_money;
            $data->idUser= $idUser;
            $data->statusMoney= "0";
            $data->withdrawMoney= $request->withdrawMoney;
            $data->save();
    
        }
      

        return redirect('/withdraw')->with('message',"ถอนเงินสำเร็จ อยู่ระหว่างการดำเนินการถอน");
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