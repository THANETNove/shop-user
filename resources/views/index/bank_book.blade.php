@extends('layouts.home')
@section('content')

  
    {{--  <div class="head logo-center active1">
        <div class="set-head ">
            <p class="text">บันทึก</p>
        </div>
        <div class="col-12 col-md-12 col=lg-12" align="left">
            <button type="button" class="btn btn-light bottom1">รอดำเนินการ</button>
        </div>
        @foreach ($user as $user)
        <div class="row">
            <div class="box1 col-10">
                <div align="left" style="color:rgb(176, 191, 186)">
                    {{ $user->created_at}} 
                </div>
                <div align="left">
                    <img class="imgas" src="{{asset($user->picture)}}" align=left hspace="10" vspace="10"/>
                    <p class="top112">รหัสสินค้า:
                    {{ $user->Product_code}}
                    </p>
                    <p class="top113">ราคา:&nbsp;  ฿&nbsp;{{ number_format($user->price,2)}}</p>
                    <p class="top113">เปอร์เช็นต์: {{ $user->percent}} %</p>
                    <p class="top113">รายได้: &nbsp;  ฿&nbsp;{{ number_format($user->price,2)}} </p>
                    <div align="right">
                        <a href="{{route('shop_index.show',$user->id)}}" type="button" class="btn btn-light bottom1 color1111 ">รอดำเนินการ</a>
                    </div>  
                    <br clear=left>
                </div>
            </div>
        </div>  --}}
       {{--  @endforeach
        <div class="navbar-Footer2">
            @include('layouts.navbarFooter2')
        </div>
    </div> --}}





    
@endsection
