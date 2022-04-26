<div class="head">
  <p class="center text-head">รายชื่อธุระกิจ</p>
</div>

<table class="table table-bordered down12">
    <tbody>
      <tr class="img-shop box-shop center ">
        <td class="col-3 col-sm-3 col-md-4 " >
           <a href="{{ URL('topping/180Shopee')}}" class="text-decoration">
            <img src="{{asset('/image/shop-21.png')}}" class="img-shop-tb-2 " alt="..."  >
            <br>
             <span class="center-shop">180Shopee</span>
           </a>
        </td>
        <td class="col-3 col-sm-3 col-md-4 nameShop " >
            <a href="{{ URL('topping/300Lazada')}}" class="text-decoration">
              <img src="{{asset('/image/shop-22.png')}}"  class="img-shop-tb-2" alt="...">
            <br>
            <span class="center-shop">300Lazada</span>
            </a>
        </td>
            <td class="col-3 col-sm-3 col-md-4 nameShop" >
                <a href="{{ URL('topping/180Shop')}}" class="text-decoration">
                  <img src="{{asset('/image/shop-23.png')}}"  class="img-shop-tb-2" alt="..." >
              <br>
                <span class="center-shop">180Shop</span>
                </a>
            </td>
      </tr>
      <tr class="img-shop box-shop center">
        <td class="col-3 col-sm-3 col-md-4 nameShop" >
            <a href="{{ URL('topping/60Advice')}}" class="text-decoration">
              <img src="{{asset('/image/Advice.png')}}"  class="img-shop-tb-2" alt="...">
            <br>
            <span class="center-shop">60Advice</span>
            </a>
        </td>
        <td class="col-3 col-sm-3 col-md-4 nameShop" >
            <a href="{{ URL('topping/300 JDL')}}" class="text-decoration">
              <img src="{{asset('/image/shop-25.png')}}" class="img-shop-tb-2" alt="...">
           <br>
            <span class="center-shop">300 JDL</span>
            </a>
        </td>
            <td class="col-3 col-sm-3 col-md-4 nameShop" >
               <a href="{{ URL('topping/300Chilindo')}}" class="text-decoration">
                <img src="{{asset('/image/shop-26.png')}}"  class="img-shop-tb-2" alt="...">
                <br>
                <span class="center-shop">300Chilindo</span>
               </a>
            </td>
      </tr>
      <tr class="img-shop box-shop center nameShop">
        <td class="col-3 col-sm-3 col-md-4 " >
            <a href="{{ URL('topping/1200CENTRAL')}}" class="text-decoration">
              <img src="{{asset('/image/shop-27.png')}}"  class="img-shop-tb-2" alt="...">
            <br>
            <span class="center-shop">1200CENTRAL</span>
            </a>
        </td>
        <td class="col-3 col-sm-3 col-md-4 nameShop" >
            <a href="{{ URL('topping/180PowerBuy')}}" class="text-decoration">
              <img src="{{asset('/image/shop-28.png')}}" class="img-shop-tb-2" alt="...">
            <br>
            <span class="center-shop">180PowerBuy</span>
            </a>
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
                        <p for="exampleFormControlInput1"    class="form-label font-size-14">ราคา</p>
                        <input type="text" class="form-control" id="price" name="price" value="25" >
                      </div>
                     <div>
                        <div class="container">
                            <div class="row row-cols-6 font-size15">
                              <div class="col product-price" id="product1">
                                  <i class="fa-solid fa-tag" style='font-size:40px'></i>
                                  <p>25</p>
                                </div>
                              <div class="col product-price" id="product2">
                                  <i class="fa-solid fa-tag" style='font-size:40px'></i>
                                  <p>100</p>
                                </div>
                              <div class="col product-price" id="product3">
                                  <i class="fa-solid fa-tag" style='font-size:40px'></i>
                                  <p>500</p>
                                </div>
                              <div class="col  product-price" id="product4">
                                  <i class="fa-solid fa-tag" style='font-size:40px'></i>
                                  <p>1 k</p>
                            </div>
                              <div class="col product-price" id="product5"> 
                                  <i class="fa-solid fa-tag" style='font-size:40px'></i>
                                  <p>2.5 k</p>
                                </div>
                              <div class="col product-price" id="product6">
                                  <i class="fa-solid fa-tag" style='font-size:40px'></i>
                                  <p>5 k</p>

                                </div>
                            </div>
                          </div>
                     </div>
                     <br>
                     <br>
                     <br>
                    <div class="mb-3  head-center">
                        <button type="button" id="buy-shop" class="btn btn-outline-light">ซื้อสินค้า</button>
                    </div>
                    <br>
                </div>
            </div>
        </div>     
    </div>
  </div>
  
 