@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('index')}}">
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-head">
        <p  class="text">บันทึกรายการทั้งหมด</p>
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

<div class="container inpput-boder top ">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <nav>
                <div class="nav nav-tabs span" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">รวม</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">ประวัติ</button>
                  <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">ประวัติ</button>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="container logo-center">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <img src="{{asset('/image/empty-image.png')}}" class="img-shop-tb-2"  alt="...">
                    <p class="font-16"> ไม่มีข้อมูล</p>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <img src="{{asset('/image/empty-image.png')}}" class="img-shop-tb-2"  alt="...">
                    <p class="font-16"> ไม่มีข้อมูล</p>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <img src="{{asset('/image/empty-image.png')}}" class="img-shop-tb-2"  alt="...">
                    <p class="font-16"> ไม่มีข้อมูล</p>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection

