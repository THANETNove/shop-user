<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdraw_money;
use auth;
use DB;
use App\Models\User;
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

    public function getData()
    {   
        $id =  Auth::user()->id;
        $user = DB::table('buy_outs')
                    ->where('userId',$id)
                    ->get();
      
        $admin = DB::table('won_prizes')
                    ->get();
      
        return response()->json([$user,$admin]);
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
