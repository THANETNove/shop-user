@extends('layouts.app')

@section('content')
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="btn btn-success"  href="{{route('level.create')}}">เพิ่ม Level</a> &nbsp; &nbsp; 
  
          <a class="btn btn-success"  href="{{route('level_user.index')}}">เพิ่ม Level User</a> &nbsp; &nbsp; 
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
          <th scope="col">ระดับ vip</th>
          <th scope="col">แก้ไข vip</th>
           
        </tr>
      </thead>
    <tbody>
      @php
      $idUser = 1;
      @endphp
      @foreach ($level as $level) 
            <tr class="onClickBtn" >
                    <td class="col-3 col-sm-3 col-md-1" >
                        {{ $idUser++ }} 
                 
                    </td>
                    <td class="col-3 col-sm-3 col-md-1">
                      {{ $level->vip }} 
                    </td>
                <td class="col-3 col-sm-3 col-md-1 ">
                  <a href="{{route('level.edit',$level->id)}}" class="btn btn-primary">แก้ไขข้อมูล</a> 
                </td> 
            </tr>
        @endforeach 
    </tbody>
</table>
@endsection
