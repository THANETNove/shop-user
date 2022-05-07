@extends('layouts.home')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item  active ">
        <img src="{{asset('/image/B-1.png')}}" class="image" alt="...">
      </div>
      <div class="carousel-item ">
        <img src="{{asset('/image/B-2.png')}}" class="image" alt="...">
      </div>
      <div class="carousel-item ">
        <img src="{{asset('/image/B-3.png')}}" class="image" alt="...">
      </div>
      <div class="carousel-item ">
        <img src="{{asset('/image/B-4.png')}}" class="image" alt="...">
      </div>
      <div class="carousel-item ">
        <img src="{{asset('/image/img15.jpeg')}}" class="image" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="welcome-to-buy">
    <h3 class="welcome"> <span class="span-white"></span> &nbsp;&nbsp;&nbsp;ยินดีต้อนรับสู่ซื้อ</h3>
</div>
<div class="box-shop ">
    <table class="table table-bordered">
        <tbody>
          <tr class="img-shop">
            <td class="col-3 col-sm-3 col-md-6 " >
                <img src="{{asset('/image/shop-22.png')}}" class="img-shop-tb" alt="...">
                &nbsp;&nbsp;
                <span class="center-shop">300Lazada</span>
            </td>
            <td class="col-3 col-sm-3 col-md-6 " >
                <img src="{{asset('/image/shop-23.png')}}" class="img-shop-tb" alt="...">
                &nbsp;&nbsp;
                <span class="center-shop">180Shop</span>
            </td>
          </tr>
          <tr class="img-shop">
            <td class="col-3 col-sm-3 col-md-6 " >
                <img src="{{asset('/image/shop-21.png')}}" class="img-shop-tb" alt="...">
                &nbsp;&nbsp;
                <span class="center-shop">180Shopee</span>
            </td>
            <td class="col-3 col-sm-3 col-md-6 " >
                <img src="{{asset('/image/shop-27.png')}}" class="img-shop-tb" alt="...">
                &nbsp;&nbsp;
                <span class="center-shop">1200CENTRAL</span>
            </td>
          </tr>
          <tr class="img-shop">
            <td class="col-3 col-sm-3 col-md-6 " >
                <img src="{{asset('/image/shop-26.png')}}" class="img-shop-tb" alt="...">
                &nbsp;&nbsp;
                <span class="center-shop">300Chilindo</span>
            </td>
            <td class="col-3 col-sm-3 col-md-6 " >
                <img src="{{asset('/image/shop-28.png')}}" class="img-shop-tb" alt="...">
                &nbsp;&nbsp;
                <span class="center-shop">180PowerBuy</span>
            </td>
          </tr>
          <tr class="img-shop">
            <td class="col-3 col-sm-3 col-md-6 " >
                <img src="{{asset('/image/Advice.png')}}" class="img-shop-tb" alt="...">
                &nbsp;&nbsp;
                <span class="center-shop">60Advice</span>
            </td>
            <td class="col-3 col-sm-3 col-md-6 " >
                <img src="{{asset('/image/shop-25.png')}}" class="img-shop-tb" alt="...">
                &nbsp;&nbsp;
                <span class="center-shop">300JD</span>
            </td>
          </tr>
        </tbody>
      </table>
        <div class="head-center color-fff">
          <h1>คอลัมน์รายได้</h1>
        </div>

      <div class="overflowTest-ll">
        <div class="box-scroll animation-box">
          <table class="table table-bordered">
            <tbody>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section1" href="#section9">aasdasd<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">1230&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section2" href="#section2">tennpyu<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">900&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section3" href="#section3">follry<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">1000&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section4" href="#section4">wwwlovr11<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">8900&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section5" href="#section5">asvssss1<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">700&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section6" href="#section6">nameff<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">5200&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section7" href="#section7">werffhj<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">4555&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="ssection8" href="#">aasdasd<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">3200&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section9" href="#section9">aggefttyud<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">12565&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section9" href="#section9">ddbtty<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">5656&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section9" href="#section9">jjrrgsd<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">12565&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section9" href="#section9">sfsfvcxx<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">9565&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section9" href="#section9">sgsfsccc<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">7565&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section9" href="#section9">fafaccccc<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">1565&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section9" href="#section9">asfvcvvcs<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">5550&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section9" href="#section9">faffdssf<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">1200&nbsp; </span>฿</p>
                </td>
              </tr>
              <tr class="img-shop">
                <td class="col-3 col-sm-3 col-md-6 " >
                   <p class="income" id="section9" href="#section9">adsffsfsf<br>LAZADA <span>รายได้&nbsp; <span class="income-baht">24110&nbsp; </span>฿</p>
                </td>
              </tr>
            </tbody>
          </table> 
        
        </div>
      </div>
      <style>
     
      </style>
</div>


@include('layouts.navbarFooter') 
@endsection