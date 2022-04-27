{{-- {{-- รายงาน --}}

@extends('layouts.home')
@section('content')

<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('user')}}">
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-head ">
        <p  class="text">บันทึกการจอง</p>
    </div>
</div>
<div class="col-md-10 col 12 violation  table-responsive">
    <table class="table table-bordered text-table">
        <thead>
            <tr>
              <th scope="col">รอบที่</th>
              <th scope="col">#</th>
              <th scope="col">ชื่อสินค้า</th>
              <th scope="col">ผลข้างหน้า</th>
              <th scope="col">ผลทายหลัง</th>
              <th scope="col">จำนวนเงิน</th>
              <th scope="col">วันที่</th>
            </tr>
          </thead>
        <tbody>
            @php
             $idUser = 1;   
            @endphp
            @foreach ($dataJoin as $line)
                <tr class="onClickBtn" >
                        <td class="col-3 col-sm-3 col-md-1" >
                            {{ $idUser++ }} 
                        </td>
                        <td class="col-3 col-sm-3 col-md-2 ">
                          {{ $line->numberCount }} 
                      </td>
                        <td class="col-3 col-sm-3 col-md-2">
                          {{ $line->product_name }} 
                        </td>
                        <td class="col-3 col-sm-3 col-md-2 ">
                          {{ $line->finished_size }} 
                        </td>
                    <td class="col-3 col-sm-3 col-md-1 ">
                      {{ $line->back_piece }} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-1" >
                      @php
                      $moneyAll =  number_format( $line->price,2)
                     @endphp
                       {{ $moneyAll }} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-2 ">
                      {{ $line->created_at }} 
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection

