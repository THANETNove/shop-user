@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('index')}}">
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-head">
        <p  class="text">รายงานกลุ่ม</p>
    </div>
</div>
<div class="container inpput-boder">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
           <input type="text" id="datepicker" class="inpput-text" placeholder="กรุณากรอกชื้อสมาชิก">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-5 col-sm-5 col-md-5">
           <input type="text" id="datepicke2" class="datepicker border-red" value="20/02/2020" placeholder="20/02/2020">
        </div>
        <div class="col-5 col-sm-5 col-md-5">
            <input type="text" id="datepicker3" class="datepicker border-red" value="25/02/2020" placeholder="25/02/2020">
         </div>
        <div class="col-2 col-sm-2 col-md-2">
            <p class="data-text">วันที่</p>
        </div>
    </div>
</div>
<br>
<div class="container head-center">
    <div class="row">
        <div class="col-4 col-sm-4 col-md-4 head-center ">
            <p class="date">0.00 <br> <span class="font-size-14">กำไรลอตเตอรี่</span></p>
        </div>
        <div class="col-4 col-sm-4 col-md-4">
            <p class="date">0.00 <br> <span class="font-size-14">สรุปค่าคอมมิชชั่น</span></p>
         </div>
         <div class="col-4 col-sm-4 col-md-4">
            <p class="date">1 <br> <span class="font-size-14">จำนวนสายล่าง</span></p>
         </div>
    </div>
</div>
<div class="container head-center">
    <div class="row">
        <div class="col-4 col-sm-4 col-md-4 head-center ">
            <p class="date">
            {{ number_format($priceUser[0],2)}} 
            <br> <span class="font-size-14">ยอดสั่งซื้อ</span></p>
        </div>
        <div class="col-4 col-sm-4 col-md-4">
            <p class="date">
            {{ number_format($priceUser[2],2)}}
            <br> <span class="font-size-14">โบนัสที่ได้</span></p>
         </div>
         <div class="col-4 col-sm-4 col-md-4 head-center ">
            <p class="date">0.00 <br> <span class="font-size-14">กำไรอื่น</span></p>
        </div>
    </div>
</div>
<div class="container head-center">
    <div class="row">
        <div class="col-4 col-sm-4 col-md-4 head-center ">
            <p class="date">0 <br> <span class="font-size-14">จำนวนคนเดิมพัน</span></p>
        </div>
        <div class="col-4 col-sm-4 col-md-4">
            <p class="date">0 <br> <span class="font-size-14">ยอดเติมเงินครั้งแรก</span></p>
         </div>
         <div class="col-4 col-sm-4 col-md-4">
            <p class="date">0 <br> <span class="font-size-14">จำนวนผู้สมัคร</span></p>
         </div>
    </div>
</div>
<div class="container head-center">
    <div class="row">
        
        <div class="col-4 col-sm-4 col-md-4">
            <p class="date">0.00 <br> <span class="font-size-14">เดิมพันอื่น</span></p>
         </div>
         <div class="col-4 col-sm-4 col-md-4">
            <p class="date">0 <br> <span class="font-size-14">บุคคลอื่น</span></p>
         </div>
         <div class="col-4 col-sm-4 col-md-4 head-center ">
            <p class="date">
            {{ number_format($priceUser[5],2)}}
            <br> <span class="font-size-14">จำนวนเงินเติม</span></p>
        </div>
    </div>
</div>
<div class="container head-center">
    <div class="row">
        
        <div class="col-4 col-sm-4 col-md-4">
            <p class="date">
            {{ number_format($priceUser[4],2)}}
            <br> <span class="font-size-14">จำนวนเงินถอน</span></p>
         </div>
    </div>
</div>


@endsection

