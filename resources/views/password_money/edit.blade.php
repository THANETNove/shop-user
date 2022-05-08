@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('set-up')}}">
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-head">
        <p  class="text">เเก้ไขรหัสผ่าน เพิ่มละ/ถอนเงิน </p>
    </div>
</div>
    <div class="input-bank">
        <div style="text-align: center">
            @if (session('status'))
                <strong style="color: #fff">{{ session('status') }}</strong>
            @endif
        </div>
        <form method="POST" action=" {{route('pass_money.update',$id)}}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label font-16">รหัสเติมเงิน/ถอนเงิน  ใส่ 6 ตัวเลข</label>
                <input type="number" class="form-control input-back @error('password') is-invalid @enderror" name="password" 
                    placeholder="ใส่ ตัวเลข 6 ตัว" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: #fff">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="logo-center">
                <button type="submit" class="btn btn-outline-light contact  col-12 col-md-8" >บันทึกข้อมูล</button>
            </div>
        </form>
    </div> 

@endsection
