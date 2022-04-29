@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">โบนัสที่ได้</div>
                    <div style="text-align: center">
                        @if (session('status'))
                            <strong style="color: #0d6efd">{{ session('status') }}</strong>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="" method="POST"  action="{{route('product.store' )}}">
                            @csrf
                         
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('คุณเปอร์เช็น') }}</label>
                                 <div class="col-md-6">
                                    <input id="challenge" type="number" min="0"
                                    class="form-control @error('challenge') is-invalid @enderror" name="challenge"
                                    value="" required placeholder="รอบผลทาย" autofocus>
                                    
                                </div>
                            </div>               
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4" id="submit_from">
                                    <button type="submit"  class="btn btn-primary">
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
   
@endsection

