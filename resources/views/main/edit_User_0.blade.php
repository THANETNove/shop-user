@extends('layouts.app')

@section('content')
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">สมาชิก</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
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
          <th scope="col">ชื่อ</th>
          <th scope="col">รหัสคำเชิญ</th>
          <th scope="col">จำนวนเงิน</th>
          <th scope="col">ค่าคอมมิชชั่น</th>
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
                    <td class="col-3 col-sm-3 col-md-2">
                      {{ $user->username }} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-2 ">
                      {{ $user->invitation }} 
                    </td>
                <td class="col-3 col-sm-3 col-md-2" >
                  @php
                  $money =  number_format($user->money,2)
                 @endphp
                   {{ $money }}  บาท
                </td>
                <td class="col-3 col-sm-3 col-md-2 ">
                  {{ $user->commissions_points }} 
                </td>
                <td class="col-3 col-sm-3 col-md-1 ">
                  <a href="{{route('edit_admin.edit',$user->id)}}" class="btn btn-primary">แก้ไขข้อมูล</a> 
                </td> 
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
