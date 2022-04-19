<div  class="set">
    <i class="fa-solid fa-gear" style='font-size:28px'></i>
</div>
<div  class="username" >
    <img src="{{asset('/image/avatar90.png')}}" class="avatar" alt="...">
    <span>  &nbsp; {{Auth::user()->username}}</span>
</div>
<div class="container logo-center ">
    <table class="table table-bordered">
        <tbody>
          <tr class="img-shop">
            <td class="col-3 col-sm-3 col-md-6 " >
                <i class="fas fa-wallet colorText" style='font-size:28px'></i>
                &nbsp;&nbsp;
                <span class="center-shop" >เติมเงิน</span>
            </td>
            <td class="col-3 col-sm-3 col-md-6 " >
                <i class="fas fa-sack-dollar colorText" style='font-size:28px'></i>
                &nbsp;&nbsp;
                <span class="center-shop">ถอนเงิน</span>
            </td>
          </tr>
        </tbody>
      </table>
  </div>
  
  <div class="container logo-center ">
    <table class="table table-bordered">
        <tbody >
          <tr class="img-report">
            <td class="col-3 col-sm-3 col-md-4 td-box" >
                <img src="{{asset('/image/re.png')}}" class="report" alt="...">
               <br>
                <span class="center-shop" >รายงาน</span>
            </td>
            <td class="col-3 col-sm-3 col-md-4 td-box" >
                <img src="{{asset('/image/re1.png')}}" class="report" alt="...">
               <br>
                <span class="center-shop">บัญชี</span>
            </td>
            <td class="col-3 col-sm-3 col-md-4 td-box" >
                <img src="{{asset('/image/serve.png')}}" class="report" alt="...">
               <br>
                <span class="center-shop">บันทึกการจอง</span>
            </td>
          </tr>
        </tbody>
      </table>
  </div>
  <br>
<div class="margin-user">
    <div class="border-th">
        <p  class="text">เป๋าตังของฉัน</p>
      </div>
      <br>
      <div class="border-th">
        <p  class="text span">0.00 <span>ยอกเงิน ฿ &nbsp;<i class="fa-solid fa-arrow-rotate-right" id="reload"></i>&nbsp;&nbsp;</span></p>
      </div>
      <br>
      <div class="border-th">
        <img src="{{asset('/image/daili1.svg')}}" class="report-manu" alt="...">
        &nbsp;&nbsp;
        <span class="text margin-top" id="clickOffcanvas" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight1">ตัวเเทน</span>
      </div>
      <div class="border-th">
        <img src="{{asset('/image/daili2.svg')}}" class="report-manu" alt="...">
        &nbsp;&nbsp;
        <span class="text margin-top" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2">ศูนย์บริการ</span>
      </div>
      <div class="border-th">
        <img src="{{asset('/image/daili3.svg')}}" class="report-manu" alt="...">
        &nbsp;&nbsp;
        <span class="text margin-top" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight3" aria-controls="offcanvasRight3">ประกาศ</span>
      </div>
</div>