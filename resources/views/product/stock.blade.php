@extends('layouts.app')

@section('content')
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="btn btn-success"  href="{{route('stock.create')}}">เพิ่มสินค้า</a> &nbsp; &nbsp; 
  
          <a class="btn btn-success"  href="{{route('stock.index')}}">สินค้าเเล้ว</a> &nbsp; &nbsp; 
          <a class="btn btn-success"  href="{{ URL::to('index_buy')}}">สินค้ายังไม่ได้</a>
      </div>
      
      @if (session('status'))
          <strong style="color: #0d6efd">{{ session('status') }}</strong>
       @endif
    </div>
  </nav>
<br>
  <table class="table table-bordered text-table">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ร้านค้า</th>
          <th scope="col">รูปภาพ</th>
          <th scope="col">รหัสสินค้า</th>
          <th scope="col">ราคาสินค้า</th>
          <th scope="col">เปอร์เช็นต์</th>
          <th scope="col">รายได้</th>
          <th scope="col">สถานะชำระ</th> 
          <th scope="col">แก้ไขข้อมูล</th>
           
        </tr>
      </thead>
    <tbody>
      @php
      $idUser = 1;
      @endphp
        @foreach ($user as $user)
            <tr class="onClickBtn" >
                    <td class="col-3 col-sm-3 col-md-1" >
                        {{ $idUser++ }} 
                       {{--  <span class="tooltiptext" id="{{$user->code}}" onclick="functionCopy({{$user->code}})">คัดลอก</span> --}}
                    </td>
                    <td class="col-3 col-sm-3 col-md-1">
                      {{ $user->store }} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-2 ">
                      <img src="{{asset($user->picture)}}" alt="" width="100" height="70"> 
                    </td>
                    <td class="col-3 col-sm-3 col-md-2 ">
                      {{ $user->Product_code }} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-1 ">
                      {{ $user->price}} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-1 ">
                      {{ $user->percent}} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-1 ">
                      {{ $user->income}} 
                    </td>
                   {{--  <td class="col-3 col-sm-3 col-md-1 ">
                      {{ $user->payment_status}} 
                    </td> --}}
                    <td class="col-3 col-sm-3 col-md-1 ">
                      @if ($user->payment_status != null)
                          <p>ซื้อเเล้ว</p>
                      @else
                      <p>ยังไม่ได้ซื้อ</p>
                      @endif
                    </td>
                <td class="col-3 col-sm-3 col-md-1 ">
                  <a href="{{route('stock.edit',$user->id)}}" class="btn btn-primary">แก้ไขข้อมูล</a> 
                </td> 
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
