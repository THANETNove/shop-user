@extends('layouts.app')

@section('content')
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="btn btn-success"  href="{{route('top_up_amount.create')}}">เพิ่มจำนวนเงิน</a> &nbsp; &nbsp; 

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
          <th scope="col">จำนวนเงิน</th>
          <th scope="col">แก้ไขข้อมูล</th>
          <th scope="col">ลบข้อมูล</th>
           
        </tr>
      </thead>
    <tbody>
      @php
      $idUser = 1;
      @endphp
      @foreach ($amounts as $amounts)
            <tr class="onClickBtn" >
                    <td class="col-1 col-sm-1 col-md-2" >
                        {{ $idUser++ }} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-6">
                      {{ $amounts->amount }} 
                    </td>
                    
                <td class="col-3 col-sm-3 col-md-2">
                  <a href="{{route('top_up_amount.edit',$amounts->id)}}" class="btn btn-primary">แก้ไขข้อมูล</a> 
                </td> 
                <td class="col-3 col-sm-3 col-md-2">
                    <a href="{{URL::to('amount_destroy',$amounts->id)}}" class="btn btn-danger">ลบข้อมูล</a> 
                  </td> 
            </tr>
        @endforeach 
    </tbody>
</table>
@endsection
