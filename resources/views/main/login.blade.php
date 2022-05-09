
{{-- หน้า Login --}}
<button class="btn btn-primary" type="button"  id="onClickRegister"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="display:none">Toggle right offcanvas</button>

<div class="offcanvas offcanvas-end login" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel" ></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 " >
                <div class="logo-center">
                    <img src="{{asset('/image/8XdGol.png')}}" class="logo-img"  alt="...">
                </div>
                <br>
               <div class="logo-center">
                    </div class="logo-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            
                            {{-- login --}}

                            <div class="col-md-8"  id="form-login" >
                                <div class="loinText logo-center">
                                        <p>เข้าสู้ระบบ</p>
                                </div>
                                <div >
                                    <div>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-12 " >
                                                    <input id="username" type="text" class="form-control color55 color56 contact @error('username') is-invalid @enderror" name="username" value="{{ old('email') }}" required placeholder="กรุณากรอกชื่อผู้ใช้" autofocus>
                    
                                                    <span id="messageError"    class="colorText"></span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                    
                                                <div class="col-md-12">
                                                    <input id="password" type="password" class="form-control color55 color56 contact
                                                     @error('password') is-invalid @enderror"  name="password" required placeholder="กรุณากรอกpassword" autocomplete="current-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="forgot">
                                                <p class="colorText" id="forgotError">ลืมรหัสผ่าน</p>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="logo-center">
                                               <a href="register" class="text-decoration">
                                                    <p class="colorText" id="subscribe">ไม่มีบัญชี？สมัครสมาชิก</p>
                                               </a>
                                               
                                            </div>
                                           
                                            <div class="row mb-0 ">
                                                <div class="d-grid gap-2 logo-center ">
                                                    <button type="submit" class="btn btn-primary contact color57 color58 ">
                                                        {{ __('เข้าสู่ระบบ') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div>
               </div>
            </div>
        </div>
    </div>
  </div>
</div>