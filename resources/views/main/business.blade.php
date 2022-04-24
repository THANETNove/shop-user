<div class=py-12>
    <div class="container">
        <div class="row head-center text-offcanvas font-size15 ">
            <div class="col-4 col-sm-4 col-md-4">
            <br>
            <br>
             <p>[202204230461]</p>
             <p>ผลการจับคู่คำสั่งชื้อ</p>
            </div>
            <div class="col-4 col-sm-4 col-md-4">
                <p>108Shop</p>
             <br>
             <p>ชิ้นเล็ก</p>
            </div>
            <div class="col-4 col-sm-4 col-md-4">
             <br>
             <br>
             <br>
             <p>ชิ้นคู่</p>
            </div>

        </div>
    </div>
</div>
<div class="border-th ">
    <p  class="font-size span">[202204230462] กำหนดเวลาการจับคู่คำสั่งชื้อ<span id="countingdown"></span></p>
</div>
<table class="table table-bordered down12">
    <tbody>
      <tr class="img-shop box-shop center">
        <td class="col-3 col-sm-3 col-md-4 .box-shop-padding nameShop"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"  >
            <img src="{{asset('/image/shop-21.png')}}" class="img-shop-tb-2" alt="...">
           <br>
            <span class="center-shop">SHOPEE</span>
        </td>
        <td class="col-3 col-sm-3 col-md-4 nameShop" >
            <img src="{{asset('/image/shop-22.png')}}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" class="img-shop-tb-2" alt="...">
            <br>
            <span class="center-shop">LAZADA</span>
        </td>
            <td class="col-3 col-sm-3 col-md-4 nameShop" >
                <img src="{{asset('/image/shop-23.png')}}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" class="img-shop-tb-2" alt="...">
              <br>
                <span class="center-shop">SHOP24</span>
            </td>
      </tr>
      <tr class="img-shop box-shop center">
        <td class="col-3 col-sm-3 col-md-4 nameShop" >
            <img src="{{asset('/image/shop-24.png')}}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" class="img-shop-tb-2" alt="...">
            <br>
            <span class="center-shop">JIB</span>
        </td>
        <td class="col-3 col-sm-3 col-md-4 nameShop" >
            <img src="{{asset('/image/shop-25.png')}}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" class="img-shop-tb-2" alt="...">
           <br>
            <span class="center-shop">JD CENTRAL</span>
        </td>
            <td class="col-3 col-sm-3 col-md-4 nameShop" >
                <img src="{{asset('/image/shop-26.png')}}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" class="img-shop-tb-2" alt="...">
                <br>
                <span class="center-shop">Chilindo</span>
            </td>
      </tr>
      <tr class="img-shop box-shop center nameShop">
        <td class="col-3 col-sm-3 col-md-4 " >
            <img src="{{asset('/image/shop-27.png')}}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" class="img-shop-tb-2" alt="...">
            <br>
            <span class="center-shop">CENTRAL</span>
        </td>
        <td class="col-3 col-sm-3 col-md-4 nameShop" >
            <img src="{{asset('/image/shop-28.png')}}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" class="img-shop-tb-2" alt="...">
            <br>
            <span class="center-shop">POWER BUY</span>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <br>
  <br>  
  @php
      $money =  number_format(Auth::user()->money,2)
     @endphp
     <p  id="money-user" style="display:none;"> {{ $money}}</p>
  <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title font-size" id="money-shop">จำนวนเงินคงเหลือ  {{ $money}} ฿</h5>
      <button type="button" class="btn-close text-reset"  id="close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body small">
        <p class="offcanvas-title font-size" id="error-price"></p>
        <div class=py-12>
            <div class="container">
                <div class="row text-offcanvas down12 ">
                    <div class="mb-3">
                        <p for="exampleFormControlInput1" class="form-label font-size-14">ชื่อสินค้า</p>
                        <input type="text" class="form-control" id="nameshop-1" name="nameshop" >
                      </div>
                      <div class="mb-3">
                        <p for="exampleFormControlInput1"  class="form-label font-size-14">ขนาดสินค้า</p>
                        <select class="form-select"  id="size"  name="size" aria-label="Default select example">
                            <option  value="ชิ้นใหญ่" selected>ชิ้นใหญ่</option>
                            <option value="ชิ้นเล็ก">ชิ้นเล็ก</option>
                            <option value="ชิ้นคู่">ชิ้นคู่</option>
                            <option value="ชิ้นเดียว">ชิ้นเดียว</option>
                          </select>
                      </div>
                      <div class="mb-3">
                        <p for="exampleFormControlInput1"    class="form-label font-size-14">ขนาดสินค้า</p>
                        <select class="form-select" id="price" name="price" aria-label="Default select example">
                            <option value="25" selected>25</option>
                            <option value="100">100</option>
                            <option value="5">500</option>
                            <option value="1 k">1 k</option>
                            <option value="2.5 k">2.5 k</option>
                            <option value="5 k">5 k</option>
                          </select>
                      </div>
                    <div class="mb-3  head-center">
                        <button type="button" id="buy-shop" class="btn btn-outline-light">ซื้อสินค้า</button>
                    </div>
                    <br>
                </div>
            </div>
        </div>     
    </div>
  </div>
  
 