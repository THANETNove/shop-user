<div  class="set">
    <i class="fa-solid fa-gear" style='font-size:28px' data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight8"  id="canvasRight8" aria-controls="offcanvasRight8"></i>
</div>
<div  class="username"  >
    <img src="{{asset('/image/avatar90.png')}}" class="avatar" alt="..." 
    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight7" aria-controls="offcanvasRight7">
    <span>  &nbsp; {{Auth::user()->username}}</span>
</div>
<div class="container logo-center ">
    <table class="table table-bordered">
        <tbody>
          <tr class="img-shop">
            <td class="col-3 col-sm-3 col-md-6 " >
               <a href="top-up-money"  class="text-decoration">
                <i class="fas fa-wallet colorText" style='font-size:28px'></i>
                &nbsp;&nbsp;
                <span class="center-shop color2" >เติมเงิน</span>
               </a>
            </td>
            <td class="col-3 col-sm-3 col-md-6 " >
              <a href="withdraw" class="text-decoration">
                <i class="fas fa-sack-dollar colorText" style='font-size:28px'></i>
                &nbsp;&nbsp;
                <span class="center-shop color2">ถอนเงิน</span>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
  </div>
  
  <div class="container logo-center ">
    <table class="table table-bordered">
        <tbody >
          <tr class="img-report">
            <td class="col-3 col-sm-3 col-md-4 td-box" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight4" aria-controls="offcanvasRight4"  >
                <a href="{{ URL('reserve')}}" class="text-decoration">
                  <img src="{{asset('/image/re.png')}}" class="report" alt="...">
               <br>
                <span class="center-shop color2" >รายงาน</span>
                </a>
            </td>
            <td class="col-3 col-sm-3 col-md-4 td-box"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight5" aria-controls="offcanvasRight5" >
                <img src="{{asset('/image/re1.png')}}" class="report" alt="...">
               <br>
                <span class="center-shop color2">บัญชี</span>
            </td>
            <td class="col-3 col-sm-3 col-md-4 td-box"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight6" aria-controls="offcanvasRight6">
              <a href="{{ URL('report')}}" class="text-decoration">
                <img src="{{asset('/image/serve.png')}}" class="report" alt="...">
                <br>
                 <span class="center-shop color2">บันทึกการจอง</span>
             </td>
              </a>     
          </tr>
        </tbody>
      </table>
  </div>
  <br>
<div class="margin-user">
    <div class="border-th">
        <p  class="text color2">เป๋าตังของฉัน</p>
        <p class="set-money text color2 margin-left1" data-bs-toggle="modal" data-bs-target="#exampleModal" id="add-bonuses">โบนัส </p>
      </div>
      <br>
      @php
      $money =  number_format(Auth::user()->money,2)
     @endphp
      <div class="border-th ">
        <p  class="text span color1"  id="modeyUser" >{{$money}} </p>
        <p class="set-money text color2">ยอดเงิน ฿ &nbsp;<i class="fa-solid fa-arrow-rotate-right" id="reload"></i>&nbsp;&nbsp;</p>
      </div>
      <br>
      <div class="border-th">
        <img src="{{asset('/image/daili1.svg')}}" class="report-manu" alt="...">
        &nbsp;&nbsp;
        <span class="text margin-top color2" id="clickOffcanvas" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight1">ตัวเเทน</span>
      </div>
      <div class="border-th">
        <img src="{{asset('/image/daili2.svg')}}" class="report-manu" alt="...">
        &nbsp;&nbsp;
        <span class="text margin-top color2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2">ศูนย์บริการ</span>
      </div>
      <div class="border-th">
        <img src="{{asset('/image/daili3.svg')}}" class="report-manu" alt="...">
        &nbsp;&nbsp;
        <span class="text margin-top color2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight3" aria-controls="offcanvasRight3">ประกาศ</span>
      </div>
</div>
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bgm-color">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">โบนัส</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <div class="container">
            <div class="row row-cols-3">
              <div class="box1 head-center">
                <h6>โบนัส 10%</h6>
                <button type="button" class="btn btn-outline-info">รับ</button>
              </div>
              <div class="box2 head-center">
                <h6>โบนัส 25%</h6>
                <button type="button" class="btn btn-outline-info">รับ</button>
              </div>
              <div class="box3 head-center">
                <h6>โบนัส 30%</h6>
                <button type="button" class="btn btn-outline-info">รับ</button>
              </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row row-cols-3">
              <div class="box1 head-center">
                <h6>โบนัส 40%</h6>
                <button type="button" class="btn btn-outline-info">รับ</button>
              </div>
              <div class="box2 head-center">
                <h6>โบนัส 50%</h6>
                <button type="button" class="btn btn-outline-info">รับ</button>
              </div>
              <div class="box3 head-center">
                <h6>โบนัส 60%</h6>
                <button type="button" class="btn btn-outline-info">รับ</button>
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" data-bs-dismiss="modal" class="btn btn-outline-light">ok</button>
      </div>
    </div>
  </div>
</div>
