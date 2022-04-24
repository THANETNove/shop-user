@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('index')}}">
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-add">
        <a href="{{ URL::to('createCode')}}">
            <i class="fas fa-plus set text"  style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-head">
        <p  class="text">โปรโหมดตัวแทน</p>
    </div>
</div>
<div class="container logo-center ">
    <table class="table table-bordered text-table">
        <thead>
            <tr>
              <th scope="col">รหัสเชิญ</th>
              <th scope="col">ส่วนลด</th>
              <th scope="col">สถานะ</th>
              <th scope="col">เเก้ไข</th>
            </tr>
          </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="onClickBtn"  onclick="functionDestroy({{$user->id}})">
                        <td class="col-3 col-sm-3 col-md-3" >
                            {{ $user->code }} 
                           {{--  <span class="tooltiptext" id="{{$user->code}}" onclick="functionCopy({{$user->code}})">คัดลอก</span> --}}
                        </td>
                        <td class="col-3 col-sm-3 col-md-3">
                            {{ $user->percent }}
                        </td>
                        <td class="col-3 col-sm-3 col-md-3 ">
                            @if ($user->status == 'on')
                                <p>เปิดการใช้งาน</p>
                            @else
                                <p style="color: #adb5bd" >ปิดการใช้งาน</p>
                            @endif
                        </td>
                    <td class="col-3 col-sm-3 col-md-3" >
                        <a href="{{ URL::to('edit-inv',$user->id)}}">
                            <button type="button" class="btn btn-success">เเก้ไข</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1"  id="onClickOffcanvasBottom1" aria-controls="offcanvasBottom" style="display:none">Toggle bottom offcanvas</button>

<div class="offcanvas offcanvas-bottom offcanvas-bottom" tabindex="-1" id="offcanvasBottom1" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel"></h5>
  </div>
  <div class="offcanvas-body ">
    <div class="margin-user">
        <div class="border-th">
            <p  class="text-offcanvas span">รหัสเชิญ <span class="text-code" id="codeCopy"></span> <span class="text-code" id="idCopy"  onclick="functionCopy()"><button type="button" class="btn btn-outline-light">คัดลอก</button></span></p>
        </div>
        <br>
        <div class="border-th">
          <p  class="text-offcanvas span">ประเภท<span class="text-code" id="typeEnrol"></span></p>
      </div>
      <br>
      <div class="border-th">
        <p  class="text-offcanvas span">ส่วนลดตัวแทน<span class="text-code" id="percentAtive"></span></p>
    </div>
    <br>
      <div class="bottom-offcanvas">
        <button type="button" class="btn btn-outline-light bottom-offcanvas-border" id="destroyId" value="" >ลบ</button> &nbsp; &nbsp;&nbsp;<button type="button" class="btn btn-outline-light bottom-offcanvas-border" data-bs-dismiss="offcanvas" aria-label="Close">ปิด</button>
    </div>
    </div>
  </div>
</div>

@endsection
