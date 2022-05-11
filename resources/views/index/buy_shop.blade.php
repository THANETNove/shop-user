@extends('layouts.home')
@section('content')
<div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
    <div class="box-shopHad">
        <div class="set-back">
            <div class="set-back">
                <a href="{{ URL::to('shop_index')}}">
                    <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
                </a>
            </div>
        </div>
        <p class="text buy_shop2 ">รายละเอียดการสั่งชื้อ</p>
    </div>
</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box-shopBody">
        <div class="box-2">
            <p>อยู่ระหว่างการสั่งชื้อ</p>
            @if (session('status'))
            <strong style="color: #fd0d0d">{{ session('status') }}</strong>
            @endif
        </div>
        <div class="box-2">
            <p>รอผู้ชื้อยืนยัน คำสั่งชื้อของคุณจะถุกวาง<br>NaN:NaN:ไปแช่แข็ง</p>
        </div>
        <div class="box-2">
            <div align="left">
                <i class="fas fa-store"> ร้านค้า:</i>
                {{ $user[0]->store}}
            </div>
            <div align="left">
                <img class="imgas" src="{{asset($user[0]->picture)}}" align=left hspace="10" vspace="10" />
                <p class="top112">รหัสสินค้า:
                    {{ $user[0]->Product_code}}
                </p>
                <p class="top113 bold11">
                    ฿&nbsp;{{ number_format($user[0]->price,2)}}
                </p>
                <p class="top113">การรับประกันอย่างเป็นทางการ
                </p>
                <br clear=left>
            </div>
        </div>
        <div class="box-2 margin-bottom2">
            <p class="span">จำนวนเงินทั้งหมด <span>฿&nbsp;{{ number_format($user[0]->price,2)}} </span>

            </p>
            <p class="span">เปอร์เช๊นต์ <span>{{ $user[0]->percent}} %</span>

            </p>
            <p class="span">รายได้ <span>฿&nbsp;{{ number_format($user[0]->income,2)}}</span>

            </p>
            <p class="span">สถานะการชำระ <span> จ่าย </span> </p>
        </div>

        <nav class="navbar fixed-bottom navbar-light bg-light nav-bottom">
            <div class="container-fluid">
                <p class="bold11">฿&nbsp;{{ number_format($user[0]->price,2)}}</p>
                <button class="btn color1111 " type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">จ่าย</button>

                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h6 class="offcanvas-title" id="offcanvasBottomLabel">ใส่รหัสผ่านการชำระเงิน</h6>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="container">
                        <div class="calc_btn_row" >
                        <input type="text" name="a1" class="calc1" id="a1" >
                        <input type="text" name="a2" class="calc1" id="a2" >
                        <input type="text" name="a3" class="calc1" id="a3" >
                        <input type="text" name="a4" class="calc1" id="a4" >
                        <input type="text" name="a5" class="calc1" id="a5" >
                        <input type="text" name="a6" class="calc1" id="a6" >
                        </div>
                    </div>
                <div class="wrapper top112">
                    <section class="screen">
                        <div class="previous" data-operand-current>
                        </div>   
                    </section>

                    <section class="calc-btn_row">
                        <div class="calc_btn_row">
                            <button class="calc_btn" data-number>1</button>
                            <button class="calc_btn" data-number>2</button>
                            <button class="calc_btn" data-number>3</button>
                        </div>

                        <div class="calc_btn_row">
                            <button class="calc_btn" data-number>4</button>
                            <button class="calc_btn" data-number>5</button>
                            <button class="calc_btn" data-number>6</button>
                        </div>
                        <div class="calc_btn_row">
                            <button class="calc_btn" data-number>7</button>
                            <button class="calc_btn" data-number>8</button>
                            <button class="calc_btn" data-number>9</button>
                        </div>

                        <div class="calc_btn_row">
                            <button class="calc_btnNull" data-number>
                            <i class="fa-solid fa-delete-right"></i>
                            </button>
                            <button class="calc_btn" data-number>0</button>
                            <button class="calc_btn" id="click1">
                            <i class="fa-solid fa-delete-left  icon-color"></i>
                            </button>
                        </div>

                    </section>   
                </div> 
            </div>
              
                <!--  <a href="{{ URL::to('buyShop',$user[0]->id)}}" type="button" class="btn btn-light color1111" >จ่าย</a> -->
            </div>

        </nav>
        <div class="navbar-Footer2">
            @include('layouts.navbarFooter2')
        </div>
    </div>
</div>
</div>

<script type="text/JavaScript">
        $(document).ready(function(){
                let count =  0;
            $(".calc_btn").click(function(){
            
                let text = $(this).text();
                let id = $(this).attr('id');
                let pass = "";

       
             if (id != undefined) {
                    if (count > 0) {
                        count = count-1;
                        let idVar =   'a'+ (count+1);
                        document.getElementById(idVar).value = '';
                    }
             }else{
                 if (count < 6) {
                    count = count+1;
                    pass = pass.''.text);
                     let idVar =   'a'+ count;
                     document.getElementById(idVar).value = "*";
                 }
                      
             }

             console.log(text,pass);
/*              jQuery.ajax({
                       
                    //url: `/Hm-7UQjf9.r18Z/public/gatDestroy/${id}`, 
                    url: `/get-pass`,  
                    method: 'get',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        },
                    success: function(result){
                       if (result != "null") {
                           
                       }
                               
                        },
                    error: function(result){      
                    }      
                }); 
 */
             
                /* let id =  $(this).attr('id');
                let text = `<p>฿  ${id}</p>`;
                let a = ` <a href="{{ URL::to('save_about/${id}')}}" class="btn btn-light recharge3" >ยืนยัน </a>`;
                document.getElementById('amount-text').innerHTML = text;
                document.getElementById('save-amount').innerHTML = a; */
             /*    console.log ( text,count,id); */
            });
        });
    </script>
@endsection