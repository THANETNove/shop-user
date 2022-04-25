@extends('layouts.app')

@section('content')
<div class="container">
    <div style="text-align: center">
        @if (session('status'))
            <strong style="color: #0d6efd;font-size: 20px">{{ session('status') }}</strong>
        @endif 
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
                    <div style="text-align: center">
                        @if (session('status'))
                            <strong style="color: #0d6efd">{{ session('status') }}</strong>
                        @endif
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ 'won-prize' }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('รหัสรอบ') }}</label>

                                <div class="col-md-6">
                                    <input id="challenge" type="text"
                                        class="form-control @error('challenge') is-invalid @enderror" name="challenge"
                                        value="" required placeholder="รอบผลทาย" autofocus readonly>
                                    @error('challenge')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('ผลทายหน้า') }}</label>

                                <div class="col-md-6">
                                    <select class="form-select"  id="size"  name="size" aria-label="Default select example">
                                        <option  value="ชิ้นใหญ่" selected>ชิ้นใหญ่</option>
                                        <option value="ชิ้นเล็ก">ชิ้นเล็ก</option>
                                        <option value="ชิ้นคู่">ชิ้นคู่</option>
                                        <option value="ชิ้นเดียว">ชิ้นเดียว</option>
                                      </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('ผลทายหลัง') }}</label>

                                <div class="col-md-6">
                                    <select class="form-select"  id="size"  name="won_prize1" aria-label="Default select example">
                                        <option  value="ชิ้นใหญ่" selected>ชิ้นใหญ่</option>
                                        <option value="ชิ้นเล็ก">ชิ้นเล็ก</option>
                                        <option value="ชิ้นคู่">ชิ้นคู่</option>
                                        <option value="ชิ้นเดียว">ชิ้นเดียว</option>
                                      </select>
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('เพิ่มผลทาย') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/JavaScript">
        $(document).ready(function(){
             setInterval(function () {
              
                jQuery.ajax({
                url: "/Hm-7UQjf9.r18Z/public/get-conut",
                /* url: "/get-conut", */
                method: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    },
                success: function(result){

                    document.getElementById('challenge').value = `${result}`
                    
                    },
                error: function(result){

                }      
            });   
            },1000);
         
        });
    </script>
@endsection

