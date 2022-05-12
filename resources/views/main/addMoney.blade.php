@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('เติมเงิน') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('add-money-user.update',$user[0]->id)}} " enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{$user[0]->username }}" required placeholder="กรุณากรอกชื่อผู้ใช้" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('id') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="text"
                                        class="form-control" 
                                        required  value="{{$user[0]->id}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('จำนวนเงิน') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="number" class="form-control"
                                        name="money" required placeholder="100">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('เติมเงิน') }}
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
