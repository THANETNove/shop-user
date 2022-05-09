@extends('layouts.home')
@section('content')
    <div class="head logo-center money3">
        <div class="set-head ">
            <p class="text font-fff">เติมเงิน</p>
        </div>
        <div class="bold11 font-fff">
            <p class="span money2 ">฿ 33006.00 <span class="margin-left1"> สมดุล </span></p>
        </div>
         <div class="col-12 col-md-12 col=lg-12 box_buyIn ">
            <div class="container">
                <p class="money1 fa-solid " id="amount-text">฿</p>
                <p>จำนวนเงินเติมขั้นต่ำ 100 ฿</p>
             </div>
             <div class="border-th"></div>
             <div class="title money4">เลือกเงินด่วน</div>

             <div class="container">
                <div class="row money2 ">
                    @foreach ($amounts as $amounts)
                        <button type="button" class="btn btn-light recharge1 amount" id="{{$amounts->amount}}" >
                            {{$amounts->amount}}
                        </button>
                    @endforeach  
                </div>
            </div>
            <div id="save-amount">
                <a  class="btn btn-light recharge2"  >ยืนยัน</a>
            </div>
      
                <p class="top" style=color:#E64A19>
                   เคล็ดลับ:บัญชีธนาคารขแงแพลตฟรอร์มเปลี่ยนแปลงได้ ตลอดเวลาการฝากแต่ละครั้งโปรด ไปที่หน้าเติมเงินเพื่อ
                   รับหมายเลขบัญชีล่าสุด จะไม่รับผิดชอบใดๆ สำหรับเราถ้าคุณฝากเข้าบัญชีที่หมดอายุ
                </p>
        </div>
    </div>  
             



        </div>

        <div class="navbar-Footer2">
            @include('layouts.navbarFooter2')
        </div>
    </div>
    <script type="text/JavaScript">
        $(document).ready(function(){
            $(".amount").click(function(){
                let id =  $(this).attr('id');
                let text = `<p>฿  ${id}</p>`;
                let a = ` <a href="{{ URL::to('save_about/${id}')}}" class="btn btn-light recharge3" >ยืนยัน </a>`;
                document.getElementById('amount-text').innerHTML = text;
                document.getElementById('save-amount').innerHTML = a;
                console.log ( id );
            });
        });
    </script>
        
@endsection

