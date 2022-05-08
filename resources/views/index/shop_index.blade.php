@extends('layouts.home')
@section('content')
    <div class="head logo-center active1">
        {{-- <div class="set-back">
        <a href="{{ URL::to('shop')}}">
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div> --}}
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
                    <p class="top113">ราคา: ฿ 
                     {{ $user->price}}
                    </p>
                    <p class="top113">คณะกรรมการ: 20%
                    {{ $user->percent}}
                    </p>
                    <p class="top113">รายได้: 27.80
                     {{ $user->income}} 
                     <div align="right">
                        <a href="{{route('shop_index.show',$user->id)}}" type="button" class="btn btn-light bottom1 color1111 ">รอดำเนินการ</a>
                    </div>
                    </p>  
                    <br clear=left>
                </div>
            </div>
        </div>
        @endforeach
    </div>





    @include('layouts.navbarFooter2')
@endsection
