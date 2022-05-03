<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   
  

        $line = DB::table('link_lines')
                    ->get();
                    $line = $line[0]->link; 
                    Session::put('link', $line);

  

      $idStatus =  Auth::user()->is_idadmin;
        $contBank = DB::table('bank_accounts')
            ->where('id_user',Auth::user()->id)  
            ->count(); 
       
        if ($contBank !== 0) {
            $bank = DB::table('bank_accounts')
                ->where('id_user',Auth::user()->id)  
                ->get();
            Session::put('bank_name', $bank[0]->bank_name);
            Session::put('username', $bank[0]->bank_account_name); 
        }

        if ($idStatus >= '1') {

            $name = $request->search;

            if (Auth::user()->is_idadmin === '1') {
                return redirect('/money-user');
            }else if(Auth::user()->is_idadmin === '2'){
                return redirect('/miniature');
            }else{

                if ($name !== null) {

                    $user = DB::table('users')
                        ->leftJoin('bank_accounts', 'users.id', '=', 'bank_accounts.id_user')
                        ->where('users.is_idadmin', '0')  
                        ->select('bank_accounts.*','users.*')
                        ->where('is_idadmin', '0')
                        ->where('username', 'LIKE', '%' . $name . '%')  
                        ->get(); 
            
                        return view('home',['user'=> $user]);
    
               }else{
    
                $user = DB::table('users')
                        ->leftJoin('bank_accounts', 'users.id', '=', 'bank_accounts.id_user')
                        ->where('users.is_idadmin', '0')  
                        ->select('bank_accounts.*','users.*')
                        ->get();
                        
                
                return view('home',['user'=> $user]);
    
               } 

            }

         

         
        }else{
            return view('welcome');
        }

      /*   return view('home'); */
       /*  return view('welcome'); */
    }
}
