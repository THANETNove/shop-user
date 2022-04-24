@extends('layouts.app')

@section('content')
<div class="container">
{{--   <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
    </div>
  </nav> --}}
    <div style="text-align: center">
        @if (session('status'))
            <strong style="color: #0d6efd;font-size: 20px">{{ session('status') }}</strong>
        @endif 
    </div>
    <br>
  <table class="table table-success table-striped">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ชื่อ</th>
          <th scope="col">รหัสที่ถูกรางวัน</th>
          <th scope="col">วันที่</th>
        </tr>
      </thead>
    <tbody>
      @php
      $idUser = 1;
      @endphp
        @foreach ($user as $user)
            <tr class="buy_outs" >
                    <td class="col-1 col-sm-1 col-md-1" >
                        {{ $idUser++ }} 
                       {{--  <span class="tooltiptext" id="{{$user->code}}" onclick="functionCopy({{$user->code}})">คัดลอก</span> --}}
                    </td>
                    <td class="col-3 col-sm-3 col-md-3">
                      {{ $user->userId }} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-3 ">
                      {{ $user->won_prize }} 
                    </td>
                <td class="col-3 col-sm-3 col-md-3" >
                  {{ $user->created_at }} 
                </td> 
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
