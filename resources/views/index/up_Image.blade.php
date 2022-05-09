@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
            <div class="box-3">
                <div class="container">
                    <div class="row row-cols-2 bank2">
                        <div class="col-6 col-lg-6 ">
                            <p class="bank3">ชื่อบัญชีธนาคาร</p>
                        </div>
                        <div class="col-6 col-lg-6 ">
                            <P class="bank3">เกียรตินาคินภัทร</P>
                        </div>
                        <div class="col-6 col-lg-6 ">
                            <p class="bank3">ชื่อบัญชี</p>
                        </div>
                        <div class="col-6 col-lg-6 ">
                            <P class="bank3">ศิวพร ฉิมสวัสดิ์</P>
                        </div>
                        <div class="col-6 col-lg-6 ">
                            <p class="bank3">เลขบัญชี</p>
                        </div>
                        <div class="col-6 col-lg-6 ">
                            <P class="bank3">200-618080-5</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    @endsection
    {{$idAmounts}}

    <form  method="post"  action="{{('/upImage')}}"  enctype="multipart/form-data">
                            
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('รูปภาพ') }}</label>
             <div class="col-md-6">
                <input id="picture" type="file" 
                class="form-control @error('upImage') is-invalid @enderror" name="upImage"
                value="" required  autofocus>     
            </div>
        </div> 
        <div class="row mb-3" style="display:none">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ราคาสินค้า') }}</label>
             <div class="col-md-6">
                <input id="price" type="text"
                class="form-control" name="id"
                value="{{$idAmounts}}" >     
            </div>
        </div> 
       
        <div class="row mb-0">
            <div class="col-md-6 offset-md-4" id="submit_from">
                <button type="submit"  class="btn btn-primary">
                    {{ __('บันทึกข้อมูล') }}
                </button>
            </div>
        </div>
    </form>