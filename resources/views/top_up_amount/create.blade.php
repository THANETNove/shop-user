
@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">เพิ่ม จำนวนเงิน</div>
                    <div style="text-align: center">
                        @if (session('status'))
                            <strong style="color: #0d6efd">{{ session('status') }}</strong>
                        @endif
                    </div>
                    <div class="card-body">
                        
                        <form  method="post"  action="{{route('top_up_amount.store' )}}" >
                            
                            @csrf     
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('จำนวนเงิน') }}</label>
                                 <div class="col-md-6">
                                    <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" 
                                    placeholder="100" required>
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: #fff">{{ $message }}</strong>
                                    </span>
                                @enderror 
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

