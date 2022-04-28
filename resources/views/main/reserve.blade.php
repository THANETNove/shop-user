@extends('layouts.home')
@section('content')

<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('user')}}">
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-head ">
        <p  class="text">รายงาน</p>
    </div>
</div>
 <div>
        <div class="head text head-height">
          <div class="col-12 col-sm-12 col-md-12  head-center">
            <p class="font-size">
                ยอดกำกำไร(B)
                <br>
                0.00
                <br>
                คำนวณกำไร : ยอดรางวัล + โบนัสที่ได้ + ค่าคอมมิชชั่น - ยอดสั่งซื้อ
            </p>
        </div>
      </div>
        <div class="offcanvas-body offcanvas-color">
            <div class="container">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-5">
                        <input type="text" id="datepicke2" class="datepicker border-red" value="20/02/2020"
                            placeholder="20/02/2020">
                    </div>
                    <div class="col-5 col-sm-5 col-md-5">
                        <input type="text" id="datepicker3" class="datepicker border-red" value="25/02/2020"
                            placeholder="25/02/2020">
                    </div>
                    <div class="col-2 col-sm-2 col-md-2">
                        <p class="data-text">วันที่</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="container head-center">
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4">
                        <p class="date">
                            {{ number_format($priceUser[0],2)}}
                        <br>
                         <span class="font-16">ยอดสั่งซื้อ</span></p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <p class="date">
                            {{ number_format($priceUser[1],2)}}
                            <br> <span class="font-16">โบนัสที่ได้</span></p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <p class="date">{{ number_format($priceUser[5],2)}}
                            <br> <span class="font-16">ยอดที่ค้าง</span></p>
                    </div>
                </div>
            </div>
            <div class="container head-center">
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 head-center ">
                        <p class="date">0.00 <br> <span class="font-16">ค่าคอมมิชชั่น</span></p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <p class="date">
                            {{ number_format($priceUser[3],2)}}
                            <br> <span class="font-16">จำนวนเงินเติม</span></p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <p class="date">
                            {{ number_format($priceUser[4],2)}}
                            <br> <span class="font-16">จำนวนเงินถอน</span></p>
                    </div>
                </div>
            </div>
            <div class="container head-center">
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 head-center ">
                        <p class="date">
                            {{ number_format($priceUser[2],2)}}
                        <br> <span class="font-16">ยอดรวมได้เสีย</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection