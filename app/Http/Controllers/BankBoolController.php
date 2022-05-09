<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\BankBook;

class BankBoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bank_books = DB::table('bank_books')
        ->get();

        return view('bankbook.index', ['bank_books' => $bank_books])
        /* 
        return view('index.bank_book',['user'=> $user]) */;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bankbook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


 
        $data = new BankBook;
        $data->book_bank =  $request->book_bank;
        $data->name_bank =  $request->name_bank;
        $data->number_bank =  $request->number_bank;
        $data->save();
        return redirect('/bank_book')->with('status',"เพิ่ม บัญชี $request->book_bank สำเร็จเเล้ว ");
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
        $bank_books = DB::table('bank_books')
        ->where('id', $id)
        ->get();

        return view('bankbook.edit', ['bank_books' => $bank_books]);
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
        $data = BankBook::find($id);
        $data->book_bank =  $request->book_bank;
        $data->name_bank =  $request->name_bank;
        $data->number_bank =  $request->number_bank;
        $data->save();
        return redirect('/bank_book')->with('status',"เเก้ไข บัญชี $request->book_bank สำเร็จเเล้ว ");
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
