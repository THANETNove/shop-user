@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">แก้ไขข้อมูล</div>
                    <div style="text-align: center">
                        @if (session('status'))
                            <strong style="color: #0d6efd">{{ session('status') }}</strong>
                        @endif
                    </div>
                    <div class="card-body">
                        
                        <form  method="post"  action="{{route('edit_admin.update',$user[0]->id)}}">
                            @method('PUT')
                            @csrf

                         
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('username') }}</label>
                                 <div class="col-md-6">
                                    <input id="username" type="text" 
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{$user[0]->username}}">
                                      
                                </div>
                            </div> 

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('password') }}</label>
                                 <div class="col-md-6">
                                    <input id="password" type="text" 
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    value="" placeholder="เปลี่ยน password">     
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

