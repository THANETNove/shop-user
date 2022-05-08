@extends('layouts.home')
@section('content')
<div class="head logo-center active1">
{{--     <div class="set-back">
        <a href="{{ URL::to('shop')}}">
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    --}}
    <div class="set-head ">
        <p  class="text">บันทึก</p>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-12">
            <button type="button" class="btn btn-light bottom1">รอดำเนินการ</button>
          </div>
        </div>
      </div>
      
        <div class="row">
            <div class="box1">
               <div align="left">
                   <span>วันเดือนปี</span>
               </div>
               <div align="left">
                    <img class="imgas" src="{{asset('/image/A-1.png')}}">
               </div>

                
            </div>
        </div>





</div>





@include('layouts.navbarFooter2')
@endsection