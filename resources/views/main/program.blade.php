@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.headshop')
<table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">รอบที่</th>
        <th scope="col">รหัสรอบ</th>
        <th scope="col">ชื่อสินค้า</th>
        <th scope="col">รางวัลข้างหน้า</th>
        <th scope="col">รางวัลข้างหลัง</th>
        <th scope="col">วันที่</th>
      </tr>
    </thead>
    <tbody>
      @php
      $idUser = 1;
      @endphp
      @foreach ($user as $user)
        @if ($user->nameShop === $name)
            <tr class="buy_outs" >
              <td class="col-1 col-sm-1 col-md-1" >
                  {{ $idUser++ }} 
              </td>
              <td class="col-2 col-sm-2 col-md-1">
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
              <td class="col-2 col-sm-2 col-md-2 ">
                {{ $user->won_prize1 }} 
              </td>
              <td class="col-2 col-sm-2 col-md-2" >
                {{ $user->created_at }} 
              </td> 
            </tr>
            @else
        @endif
      @endforeach
      
    </div>
  </tbody>
</table>
</div>


@endsection