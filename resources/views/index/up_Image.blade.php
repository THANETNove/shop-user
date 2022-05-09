@extends('layouts.home')
@section('content')
<div class="col-12 col-sm-12 col-md-12 col-lg-12 ">

    <div class="box-3">
        <div class="container">
            <div class="row">
                <div class=" col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="box-4">
                        <img src="{{asset('/image/A-2.png')}}" class="money5 ">
                    </div>
                </div>
                <div class=" col-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="row">
                        <div class="col-6  col-lg-6">
                            <p>ชื่อธนาคาร</p>
                        </div>
                        <div class="col-6  col-lg-6">
                            <p>เกียรตินาคินภัทร</p>
                        </div>
                        <div class="col-6  col-lg-6">
                            <p>ชื่อบัญชี</p>
                        </div>
                        <div class="col-6  col-lg-6">
                            <p>น.ส. ศิสพร ฉิมสวัสดิ์</p>
                        </div>
                        <div class="col-6  col-lg-6">
                            <p>เลขบัญชี</p>
                        </div>
                        <div class="col-6  col-lg-6">
                            <p>200-618080-5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{$idAmounts}}
</div>
@endsection