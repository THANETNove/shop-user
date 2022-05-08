@extends('layouts.app')

@section('content')
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="btn btn-success"  href="{{route('level.index')}}">กลับ</a> &nbsp; &nbsp; 
          <a class="btn btn-success"  href="{{route('level_user.index')}}">ทั้งหมด</a> &nbsp; &nbsp; 
      </div>   
       @if (session('status'))
            <strong style="color: #0d6efd">{{ session('status') }}</strong>
        @endif
        &nbsp; &nbsp; &nbsp; &nbsp; 
        &nbsp; &nbsp; &nbsp; &nbsp; 
       <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
<br>
  <table class="table table-bordered text-table">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Username</th>
          <th scope="col">ระดับ vip</th>
          <th scope="col">เพิ่ม vip</th>
           
        </tr>
      </thead>
    <tbody>
      @php
      $idUser = 1;
      @endphp
      @foreach ($user as $user) 
            <tr class="onClickBtn" >
                    <td class="col-2 col-sm-2 col-md-2" >
                        {{ $idUser++ }} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-3">
                        {{ $user->username }} 
                      </td>
                    <td class="col-3 col-sm-3 col-md-3">
                      {{ $user->vip }} 
                    </td>
                 <td class="col-3 col-sm-3 col-md-2 ">
                     @if (!$user->vip)
                        <a href="{{route('level_user.show',$user->id)}}" class="btn btn-primary">เพิ่ม vip</a> 
                     @else
                        <a href="{{route('level_user.edit',$user->id)}}"  class="btn btn-secondary">เเก้ไข vip</a> 
                     @endif
                 
                </td> 
            </tr>
        @endforeach 
    </tbody>
</table>
@endsection
