@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">เพิ่มสินค้า</div>
                    <div style="text-align: center">
                        @if (session('status'))
                            <strong style="color: #0d6efd">{{ session('status') }}</strong>
                        @endif
                    </div>
                    <div class="card-body">
                        
                        <form  method="post"  action="{{route('level_user.update',$user[0]->id)}}"  enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                         
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('UserName') }}</label>
                                 <div class="col-md-6">
                                    <input id="store" type="text" 
                                    class="form-control @error('store') is-invalid @enderror" name="user"
                                    value="{{$user[0]->username}}" required  autofocus>     
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('เลือก   ระดับ VIP') }}</label>
                                 <div class="col-md-6">
                                    <select class="form-select" name="status_vip" aria-label="Default select example">
                                        @foreach ($levels as $vip)
                                            @if ($user[0]->vip === $vip->vip)
                                                <option value="{{$vip->vip}}" selected >{{$vip->vip}}</option>
                                            @else
                                                <option value="{{$vip->vip}}" >{{$vip->vip}}</option>
                                            @endif
                                          
                                        @endforeach
                                      </select>  
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
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection

