@extends('layouts.app')

@section('content')

<div class="container">
    <div style="text-align: center">
        @if (session('status'))
            <strong style="color: #0d6efd;font-size: 20px">{{ session('status') }}</strong>
        @endif 
    </div>
    <br>
    @include('layouts.headshop')
        <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">รอบที่</th>
            <th scope="col">รหัสรอบ</th>
            <th scope="col">ชื่อสินค้า</th>
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
                  </td>
                  <td class="col-2 col-sm-2 col-md-2">
                    {{ $user->countNameShop }} 
                  </td>
                  <td class="col-2 col-sm-2 col-md-2">
                    {{ $user->time_number }} 
                  </td>
                  <td class="col-2 col-sm-2 col-md-2">
                    {{ $user->nameShop }} 
                  </td>
                  <td class="col-2 col-sm-2 col-md-2 ">
                    {{ $user->won_prize }} 
                  </td>
                  <td class="col-2 col-sm-2 col-md-2" >
                    {{ $user->created_at }} 
                  </td> 
                </tr>
          @endforeach
          
        </div>
      </tbody>
    </table>
     
@endsection
