@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('user')}}">
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-report">
        <div>
           <p  class="font-size"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightWithdraw" aria-controls="offcanvasRightWithdraw">ประวัติ</p>
        </div>
    </div>
    <div class="set-head">
        <p  class="text">ถอนเงิน</p>
    </div>
</div>
<div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightWithdraw" aria-labelledby="offcanvasRightLabelWithdraw">
        <div class="offcanvas-header head ">
            <div class="head-center"></div>
            <h5 class="text">ประวัติ</h5>
            <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-body offcanvas-color">
            <table class="table color-fff">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ชื่อ-นามสกุล</th>
                    <th scope="col">จำนวนเงิน</th>
                    <th scope="col">สถานะ</th>
                    <th scope="col">วันที่</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($withdraw as $withdraw)
                  <tr>
                    <th scope="row"> {{ $withdraw->id }}</th>
                    <td> {{ $withdraw->bank_account_name }}</td>
                    @php
                        $money =  number_format(Auth::user()->money,2)
                    @endphp
                    <td>{{ $money}} ฿</td>
                    <td>
                        @if($withdraw->statusMoney == '0')
                            <p class="font-fff">
                                    อยู่ระกว่าการรออนุมัติ
                            </p>
                        @elseif ($withdraw->statusMoney == '1')
                            <p class="font-secc-16">
                                อนุมัติ เรียบร้อย
                            </p>
                        @else
                            <p  class="font-18">
                                ไม่ผ่านการอนุมัติ
                            </p>
                        @endif
                       </td>
                    <td>{{ $withdraw->created_at }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>





@if($accounts == '1')
<div class="add-bank">
    <p class="font-size-18">{{$BankAccounts[0]->bank_name}} ( {{$BankAccounts[0]->bank_account_number}})</p>
</div>
@else
<div class="add-bank">
    <a href="{{ URL::to('account')}}">
        <i class="fas fa-plus text">&nbsp;  เพิ่มบัตรธนาคาร</i>
    </a> 
</div>
@endif
<div style="text-align: center">
    @if (session('message'))
        <strong style="color: #fff;font-size: 24px;">{{ session('message') }}</strong>
    @endif

</div>
<div class="input-bank">
    <form method="POST" action="{{ route('withdraw.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label font-16">จำนวนเงินถอน (B)</label>
            <input type="number" class="form-control input-back @error('withdrawMoney') is-invalid @enderror" name="withdrawMoney" id="exampleFormControlInput1"
                placeholder="จำนวนเงิน บาท" required>
            @if (session('status'))
                    <strong style="color: #fff">{{ session('status') }}</strong>
            @endif
            @error('withdrawMoney')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: #fff">{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @php
         $money =  number_format(Auth::user()->money,2)
        @endphp
        <div class="font-size">
            @if (Auth::user()->money !== "0")
           
                ยอดเงิน: {{$money}} ฿
            @else
                ยอดเงิน: 0.00 ฿
            @endif
        </div>
        <br>
        <div class="logo-center">
            <button type="submit" class="btn btn-outline-light contact"  style="width: 100%">ถอนทันที</button>
        </div>
    </form>
</div>



@endsection
