@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">แก้ไขข้อมูล  &nbsp;&nbsp;&nbsp;
                        การคูณโบนัสที่เลือกไว้
                        &nbsp;&nbsp;&nbsp;
                        @if($user[0]->percent === '1')
                                เลือกเป็นเปอร์เช็น
                        @else
                                เลือกเป็นเงินบาท
                        @endif
                    </div>
                    <div style="text-align: center">
                        @if (session('status'))
                            <strong style="color: #0d6efd">{{ session('status') }}</strong>
                        @endif
                    </div>
                    <div class="card-body">
                        
                        <form  method="post"  action="{{route('bonus.update',$user[0]->id)}}">
                            @method('PUT')
                            @csrf

                         
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('คุณเปอร์เช็น') }}</label>
                                 <div class="col-md-6">
                                    <input id="bonus" type="number" min="0"
                                    class="form-control @error('bonus') is-invalid @enderror" name="bonus"
                                    value="{{$user[0]->bonus}}" required placeholder="รอบผลทาย" autofocus>     
                                </div>
                            </div> 

                             <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('โบนัส') }}</label>
                                 <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example" name="percent">
                                        
                                        <option value="%">เป็นเปอร์เช็น</option>
                                        <option value="บาท">เป็นเงิน</option>
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

