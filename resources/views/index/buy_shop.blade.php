@extends('layouts.home')
@section('content')
<div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
    <div class="box-shopHad">
        <div class="set-back">
            <div class="set-back">
                <a href="{{ URL::to('shop_index')}}">
                    <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
                </a>
            </div>
        </div>
        <p class="text buy_shop2 ">รายละเอียดการสั่งชื้อ</p>
    </div>
</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box-shopBody">
        <div class="box-2">
            <p>อยู่ระหว่างการสั่งชื้อ</p>
        </div>
        <div class="box-2">
            <p>รอผู้ชื้อยืนยัน คำสั่งชื้อของคุณจะถุกวาง<br>NaN:NaN:ไปแช่แข็ง</p>
        </div>
        <div class="box-2">
            <div align="left">
                <i class="fas fa-store"> ร้านค้า:</i> 
                {{ $user[0]->store}}
            </div>
            <div align="left">
                <img class="imgas" src="{{asset($user[0]->picture)}}" align=left hspace="10" vspace="10"/>
                <p class="top112">รหัสสินค้า:
                    {{ $user[0]->Product_code}}
                </p>
                <p class="top113 bold11"> 
                    ฿&nbsp;{{ number_format($user[0]->price,2)}}
                </p>
                <p class="top113">การรับประกันอย่างเป็นทางการ
                </p>  
                <br clear=left>
            </div>
        </div>
        <div class="box-2">
            <p class="span">จำนวนเงินทั้งหมด  <span>฿&nbsp;{{ number_format($user[0]->price,2)}} </span> 
                
            </p>
            <p class="span">เปอร์เช๊นต์  <span>{{ $user[0]->percent}} %</span> 
                
            </p>
            <p class="span">รายได้  <span>฿&nbsp;{{ number_format($user[0]->income,2)}}</span> 
                
            </p>
            <p class="span">สถานะการชำระ  <span> จ่าย </span> 
                {{ $user[0]->payment_status}}
            </p>
        </div>
        <div class="navbar-Footer2">
            @include('layouts.navbarFooter2')
        </div>
    </div>
</div>


@endsection