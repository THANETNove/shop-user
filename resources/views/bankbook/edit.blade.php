
@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">เเก้ไข บัญชีธนาคาร</div>
                    <div style="text-align: center">
                        @if (session('status'))
                            <strong style="color: #0d6efd">{{ session('status') }}</strong>
                        @endif
                    </div>
                    <div class="card-body">
                        
                        <form  method="post"  action="{{route('bank_book.update', $bank_books[0]->id)}}" >
                            @method('PUT')
                            @csrf     
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อบัญชีธนาคาร') }}</label>
                                 <div class="col-md-6">
                                    <input type="text" class="form-control @error('amount') is-invalid @enderror" name="book_bank"  value="{{$bank_books[0]->book_bank}}"
                                    placeholder="100" required>
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: #fff">{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อบัญชี') }}</label>
                                 <div class="col-md-6">
                                    <input type="text" class="form-control @error('amount') is-invalid @enderror" name="name_bank"  value="{{$bank_books[0]->name_bank}}"
                                    placeholder="100" required>
                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: #fff">{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('เลขบัญชี') }}</label>
                                 <div class="col-md-6">
                                    <input type="text" class="form-control @error('amount') is-invalid @enderror" name="number_bank"   value="{{$bank_books[0]->number_bank}}"
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
