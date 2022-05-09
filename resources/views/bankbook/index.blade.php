@extends('layouts.app')

@section('content')
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="btn btn-success"  href="{{route('bank_book.create')}}">เพิ่มบัญชีธนาคาร</a> &nbsp; &nbsp; 
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
          <th scope="col">ธนาคาร</th>
          <th scope="col">ชื่อบัญชีธนาคาร</th>
          <th scope="col">เลขบัญชีธนาคาร</th>
          <th scope="col">เเก้ไขบัญชีธนาคาร</th>
           
        </tr>
      </thead>
    <tbody>
      @php
      $idUser = 1;
      @endphp
      @foreach ($bank_books as $bank)
            <tr class="onClickBtn" >
                    <td class="col-1 col-sm-1 col-md-1" >
                        {{ $idUser++ }} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-3">
                      {{ $bank->book_bank }} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-3">
                        {{ $bank->name_bank }} 
                      </td>
                      <td class="col-3 col-sm-3 col-md-3">
                        {{ $bank->number_bank }} 
                      </td>
                    
                <td class="col-2 col-sm-2 col-md-2">
                  <a href="{{route('bank_book.edit',$bank->id)}}" class="btn btn-primary">แก้ไขข้อมูล</a> 
                </td> 
            </tr>
        @endforeach 
    </tbody>
</table>
@endsection
