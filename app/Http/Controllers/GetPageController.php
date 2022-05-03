<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Invitation;
use App\Models\AddMoneyUsers;
use Auth;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Support\Facades\Hash;


class GetPageController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    
        $this->middleware('check', [
            'only' => [
                'newAdmin',
                'addMoney',
                'admin',
                'moneyUser' // Could add bunch of more methods too
            ]
        ]); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function commission()
    {
        return view('main.commission');
    }

    public function walkThousand()
    {
        return view('main.walk_thousand');
    }
    public function allTems()
    {
        return view('main.all_tems');
    }
    public function myQrCode()
    {
        return view('main.my_QrCode');
    }
    public function member()
    {
        return view('main.member');
    }
    public function groupReport()
    {
        return view('main.group_report');
    }

    public function dataJoin()
    {
        $dataJoin = DB::table('won_prizes')
        ->rightJoin('buy_outs', 'won_prizes.time_number', '=', 'buy_outs.numberCount')
        ->where('buy_outs.userId', Auth::user()->id) 
        ->get();
        Session::put('dataJoin', $dataJoin);

        $messege = "โหลดเรีบยบร้อย";
        return response()->json($messege);
    }

    public function topUpMoney()

    {
        $idUser =  Auth::user()->id;
        $addMoney  =  DB::table('add_money_users')
                    ->where('id_user',$idUser) 
                    ->orderBy('id', 'DESC') 
                    ->get(); 

    
        return view('main.top_up_money' ,['addMoney'=>$addMoney]);
    }

    public function general()
    {
        return view('main.general');
    }
    public function editUser()
    {
        return view('main.editUser');
    }
    public function comment()
    {
        return view('main.comment');
    }
    public function Kyoto()
    {
        return view('main.Kyoto');
    }
   
    public function newUser(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'pass' => 'required|max:255',
        ]);
        $id =  Auth::user()->id;

        $flight = User::find($id);
        $flight->username = $request->name;
        $flight->password = Hash::make($request->pass);
        $flight->save(); 
        return Redirect()->back()->with('status',"เปลี่ยน  Username เเละ Password สำเร็จ");

    }

    public function moneyUser(Request $request)
    {
      $name = $request->search;

             if ($name !== null) {
                    $user = DB::table('users')
                        ->where('is_idadmin', 0) 
                        ->where('username', 'LIKE', '%' . $name . '%')
                        ->get();
                return view('main.money_user',['user' => $user]);
            }else{

                 $user = DB::table('users')
                        ->where('is_idadmin', 0)  
                        ->get();

            return view('main.money_user',['user' => $user]);

            } 
   
    }


    /* admin */
    
   


    public function newAdmin()
    {
        return view('auth.registerAdmin');
    }

    public function registerAdmin(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'password' => 'required|string|max:255',
        ]);

        $code = rand();
        $data = new User;
        $data->username = $request->username;
        $data->invitation= $code;
        $data->is_idadmin= "1";
        $data->money= "0";
        $data->password = Hash::make($request->password);
        $data->save();

        $dataInv = new Invitation;
        $dataInv->code = $code;
        $dataInv->status= "on";
        $dataInv->idUser= $data->id;
        $dataInv->enrol= "เเพลตฟอร์อย่างเป็นทางการ";
        $dataInv->percent = "0% (900)";
        $dataInv->save();

        return redirect('/newAdmin')->with('status',"สมัคร Admin สำเสร็จเเล้ว");
    }

 

    public function addMoney($id)
    {

        $user = User::find($id);
        return view('main.addMoney',['user' => $user]);
    }

    public function admin(Request $request)
    {
        $name = $request->search;


        $user = DB::table('users')
                ->leftJoin('commissions_points', 'users.id', '=', 'commissions_points.idUser')
                ->where('users.is_idadmin', '!=','0')  
                ->select('commissions_points.*', 'users.*')
                ->get();
                
 



            if ($name !== null) {
                    $user = DB::table('users')
                        ->leftJoin('commissions_points', 'users.id', '=', 'commissions_points.idUser')
                        ->where('users.is_idadmin', '!=','0')  
                        ->where('username', 'LIKE', '%' . $name . '%')
                        ->select('commissions_points.*', 'users.*')
                        ->get();
                        return view('admin.admin' ,['user'=> $user]);
            }else{

                 $user = DB::table('users')
                        ->leftJoin('commissions_points', 'users.id', '=', 'commissions_points.idUser')
                        ->where('users.is_idadmin', '!=','0')  
                        ->select('commissions_points.*', 'users.*')
                        ->get();

                  return view('admin.admin' ,['user'=> $user]);

            } 

       
    }
    public function index(){

        $dataJoin = DB::table('won_prizes')
                ->rightJoin('buy_outs', 'won_prizes.time_number', '=', 'buy_outs.numberCount')
                ->where('buy_outs.userId', Auth::user()->id)
                ->orderBy('buy_outs.id', 'DESC')
                ->get();
        

        return view('main.report',['dataJoin'=> $dataJoin]);

    }

public function getMoney()
{
    
    $usersMoney = DB::table('users')
            ->where('id',Auth::user()->id)
            ->get();
        return response()->json($usersMoney);
}

public function getBonuses()
{
    


    
    $usersMoney = DB::table('add_money_users')
         ->where('id_user',Auth::user()->id)
         ->whereNull('status_bonus')
         ->count();


         if ($usersMoney != "0") {
            $users_bonus = DB::table('bonuses')
            ->get();

         }else{
            $users_bonus = 0;
         }

dd($users_bonus);
    return response()->json($users_bonus);
}


/* public function addBonuses()
{
    
    $usersMoney = DB::table('add_money_users')
            ->where('id_user',Auth::user()->id)
            ->whereNull('status_bonus')
            ->sum('bonus');

    $users_bonus = DB::table('add_money_users')
            ->where('id_user',Auth::user()->id)
            ->whereNull('status_bonus')
            ->get();

    $user = DB::table('users')
            ->where('id',Auth::user()->id)
            ->get();
    $money = $user[0]->money;
        foreach ($users_bonus as $bonus) {
            $Withdraw = AddMoneyUsers::find($bonus->id);
            $Withdraw->status_bonus = "1"; 
            $Withdraw->save();
        
        }

    $moneyUser = User::find(Auth::user()->id);
    $moneyUser->money = $money+$usersMoney; 
    $moneyUser->save();

    return response()->json($usersMoney);
}
   */

}
