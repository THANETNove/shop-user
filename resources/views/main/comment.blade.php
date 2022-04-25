@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <div class="set-back">
            <a href="{{ URL::to('set-up')}}">
                <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
            </a>
        </div>
    </div>
    <div class="set-head">
        <p  class="text">ข้อคิดเห็นของฉัน <span>แสดงความคิดเห็น &nbsp;&nbsp;&nbsp;</span></p>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-5 col-sm-5 col-md-5">
               <input type="text" id="datepicker" class="datepicker" placeholder="20/02/2020">
            </div>
            <div class="col-5 col-sm-5 col-md-5">
                <input type="text" id="datepicker1" class="datepicker" placeholder="25/02/2020">
             </div>
            <div class="col-2 col-sm-2 col-md-2">
                <p class="data-text">วันที่</p>
            </div>
        </div>
    </div>
    
    <div class="gift ">
        <img src="{{asset('/image/gift.png')}}" class="img-gift" alt="...">
        <p>ไม่มีข้อมูล</p>
    </div>


</div>
@endsection