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
     $mutable1 = Carbon::now()->addMinute(3);;
     $date = $mutable->toDateString('M d Y');
     $dateTime1 = $mutable->toTimeString();
     $dateTime2 = $mutable1->toTimeString();

 
        $idNname = $request->room;
        $countid = $request->count;
  
        $countWithdraw = DB::table('won_prizes')
                    ->where('nameShop',$idNname)
                     ->whereDate('created_at', $date)
                     ->whereTime('created_at', '>=',   $dateTime1)
                     ->whereTime('created_at', '<=',   $dateTime2)  
                    ->count();


        if ($countWithdraw !== 0) {
            $withdraw = DB::table('won_prizes')
                    ->where('nameShop',$idNname)
                     ->whereDate('created_at', $date)
                     ->whereTime('created_at', '>=',   $dateTime1)
                     ->whereTime('created_at', '<=',   $dateTime2)  
                    ->select('won_prizes.time_number','won_prizes.countNameShop')
                    ->get();
            $number =  $withdraw[0]->time_number;
        }else{
            $number =  "รอบยังไม่ได้เปิด";
        }
  
         return response()->json($number);
    }

    public function byeConun(Request $request)
    {
     
        $mutable = Carbon::now();
        $date = $mutable->toDateString('M d Y');

                $idNname = $request->room;
                $countId = $request->count;
        
        
                $countWithdraw = DB::table('won_prizes')
                            ->where('nameShop',$idNname)
                            ->where('time_number',$countId)
                             ->whereDate('created_at', $date) 
                            ->count();
        
                
                if ($countWithdraw !== 0) {

                    $withdraw = DB::table('won_prizes')
                            ->where('nameShop',$idNname)
                            ->where('time_number',$countId)
                             ->whereDate('created_at', $date) 
                            ->get();
        
       
                    $wp_time_number = $withdraw[0]->time_number;
                    $wp_nameShop = $withdraw[0]->nameShop;
                    $wp_won_prize = $withdraw[0]->won_prize;
                    $wp_won_prize1 = $withdraw[0]->won_prize1;
        
                    $x = DB::table('products')
                            ->get(); 
                    $x1 = $x[0]->x_1;
                    $x2 = $x[0]->x_2;
                    

                    $buy_01 = DB::table('buy_outs')
                            ->where('numberCount',$wp_time_number)
                           ->where('product_name',$wp_nameShop)
                           ->whereDate('created_at',  $date) 
                            ->select( 'buy_outs.*') 
                           ->get();
          

                    $buy_02 = DB::table('buy_outs')
                           ->where('numberCount',$wp_time_number)
                            ->where('product_name',$wp_nameShop)
                            ->whereNull('outgrowth')
                            ->whereDate('created_at', $date)
                            ->select( 'buy_outs.*') 
                            ->count(); 
        
            
        
                        if ($buy_02 !== 0) {
                            
                            $buy_userid = $buy_01[0]->userId;
                            $buy_id = $buy_01[0]->id;
                            $buy_finished_size = $buy_01[0]->finished_size;
                            $buy_back_piece = $buy_01[0]->back_piece;
                            $buy_price = $buy_01[0]->price;
        
                            $users01 = DB::table('users')
                                    ->where('id',$buy_userid)
                                    ->get();
                            $user_money =  $users01[0]->money;
                    
        
                            if ($wp_won_prize  === $buy_finished_size && $wp_won_prize1  === $buy_back_piece) {
                        
        
                                $outgrowth  = $buy_price * $x2;
                                $outgrowth1 = (int)$user_money+(int)$outgrowth;
        
                                $userMoney = User::find($buy_userid);
                                $userMoney->money = $outgrowth1; 
                                $userMoney->save(); 
        
                            
                                $buy02 = BuyOut::find($buy_id);
                                $buy02->outgrowth = "ถูก รางวัล 2 คู่";
                                $buy02->get_paid =  $outgrowth;  
                                $buy02->save(); 
        
                            }elseif ($wp_won_prize  === $buy_finished_size || $wp_won_prize1  === $buy_back_piece) {
                            
        
                                $outgrowth  = $buy_price * $x1;
                                $outgrowth1 = (int)$user_money+(int)$outgrowth;
        
                                $userMoney = User::find($buy_userid);
                                $userMoney->money = $outgrowth1; 
                                $userMoney->save(); 
        
                                $buy02 = BuyOut::find($buy_id);
                                $buy02->outgrowth = "ถูก รางวัล 1 คู่";
                                $buy02->get_paid =  $outgrowth;  
                                $buy02->save(); 
        
                            }else{
                                $buy02 = BuyOut::find($buy_id);
                                $buy02->outgrowth = "ไม่ถูก รางวัล";
                                $buy02->get_paid =  null;  
                                $buy02->save(); 
                            }
                
                            $number =  $withdraw;
                        }
        
                }else{
                    $number =  "รอผล..";
                }
                $usersMoney = DB::table('users')
                    ->where('id',$buy_userid)
                    ->get();
                 return response()->json([$number,$usersMoney]);
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