{{-- ตัวเเทน --}}

<div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel1">
        <div class="offcanvas-header head ">
            <div class="head-center"></div>
            <h5 class="text">ตัวเเทน</h5>
            <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="head text head-height">
            <img src="{{ asset('/image/avatar90.png') }}" class="avatar" alt="...">
            <span> &nbsp; {{ Auth::user()->username }} </span>
            <p class="money-p"> ยอดเงิน: {{Auth::user()->money}} ฿</p>
        </div>
        <div class="offcanvas-body offcanvas-color">
            <div class="container logo-center ">
                <table class="table table-bordered">
                    <tbody>
                        <tr class="img-shop text-decoration">
                            <td class="col-3 col-sm-3 col-md-4 text-decoration">
                                <a href="my-qrcode" class="center-shop text-decoration">
                                    <i class="fa-solid fa-qrcode colorText" style='font-size:28px'></i>
                                    <br>
                                    รหัส QR ของฉัน
                                </a>
                            </td>
                            <td class="col-3 col-sm-3 col-md-4">
                                <a href="member" class="center-shop text-decoration">
                                    <i class="fa-solid fa-users colorText" style='font-size:28px'></i>
                                    <br>
                                    โปรโหมดสมาชิก
                                </a>
                            </td>
                            <td class="col-3 col-sm-3 col-md-4">
                                <a href="group-report" class="center-shop text-decoration">
                                    <i class="fa-solid fa-chart-area colorText" style='font-size:28px'></i>
                                    <br>
                                    รายงานกลุ่ม
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="border-th">
                <img src="{{ asset('/image/daili1.svg') }}" class="report-manu" alt="...">
                &nbsp;&nbsp;
                <a href="getInvitation" class="font-size  text-decoration margin-top-ge">โปรโหมดตัวแทน</a>

            </div>
            <div class="border-th">
                <img src="{{ asset('/image/daili3.svg') }}" class="report-manu" alt="...">
                &nbsp;&nbsp;
                <a href="commission" class="font-size margin-top-ge  text-decoration">ค่าคอมมิชชั่นตัวแทน</a>
            </div>
            <div class="border-th">
                <img src="{{ asset('/image/daili3.svg') }}" class="report-manu" alt="...">
                &nbsp;&nbsp;
                <a href="walk-thousand" class="font-size margin-top-ge text-decoration">รายละเอียดการเดิมพันของตัวแทน</a>
            </div>
            <div class="border-th">
                <img src="{{ asset('/image/daili3.svg') }}" class="report-manu" alt="...">
                &nbsp;&nbsp;
                <a href="all-tems" class="font-size margin-top-ge text-decoration">บันทึกรายการตัวแทน</a>
            </div>
        </div>
    </div>
</div>

{{-- ศูนย์บริการ --}}


<div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel2">
        <div class="offcanvas-header head ">
            <div class="head-center"></div>
            <h5 class="text">ศูนย์บริการ</h5>
            <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body offcanvas-color">
            @if(Session::has('link'))
            <a href="{{Session::get('link')}}" class="text-decoration">
                <div class="bgm">
                    <div class="row ">
                        <div class="col-4 col-sm-4 col-md-4">
                            <img src="{{ asset('/image/line.png') }}" class="bgm-image" alt="...">
                        </div>
                        <div class="col-auto col-sm-auto col-md-4">
                            <p class="font-size top">zipmax789 (ฝ่ายบริการ)</p>
                        </div>
                        <div class="col-auto col-sm-auto col-md-4">
                            <button type="button" class="btn btn-outline-light  top contact ">ติดต่อ</button>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 serve ">
                        ทางเรายินดีให้บริการตลอด 24 ชั่วโมง
                    </div>
                </div>
            </a>
            @endif
        </div>
    </div>
</div>

{{-- ประกาศ --}}


<div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight3" aria-labelledby="offcanvasRightLabel3">
        <div class="offcanvas-header head ">
            <div class="head-center"></div>
            <h5 class="text">ประกาศ</h5>
            <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body offcanvas-color">

        </div>
    </div>
</div>


{{-- รายงาน --}}


{{-- <div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight4" aria-labelledby="offcanvasRightLabel4">
        <div class="offcanvas-header head ">
            <div class="head-center"></div>
            <h5 class="text">รายงาน</h5>
            <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="head text head-height">
          <div class="col-12 col-sm-12 col-md-12  head-center">
            <p class="font-size">
                ยอดกำกำไร(B)
                <br>
                0.00
                <br>
                คำนวณกำไร : ยอดรางวัล + โบนัสที่ได้ + ค่าคอมมิชชั่น - ยอดสั่งซื้อ
            </p>
        </div>
      </div>
        <div class="offcanvas-body offcanvas-color">
            <div class="container">
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-5">
                        <input type="text" id="datepicke2" class="datepicker border-red" value="20/02/2020"
                            placeholder="20/02/2020">
                    </div>
                    <div class="col-5 col-sm-5 col-md-5">
                        <input type="text" id="datepicker3" class="datepicker border-red" value="25/02/2020"
                            placeholder="25/02/2020">
                    </div>
                    <div class="col-2 col-sm-2 col-md-2">
                        <p class="data-text">วันที่</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="container head-center">
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4">
                        <p class="date">0.00 <br> <span class="font-16">ยอดสั่งซื้อ</span></p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <p class="date">0.00 <br> <span class="font-16">โบนัสที่ได้</span></p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <p class="date">0.00 <br> <span class="font-16">โบนัสที่ได้</span></p>
                    </div>
                </div>
            </div>
            <div class="container head-center">
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 head-center ">
                        <p class="date">0.00 <br> <span class="font-16">ค่าคอมมิชชั่น</span></p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <p class="date">0.00 <br> <span class="font-16">จำนวนเงินเติม</span></p>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <p class="date">0.00 <br> <span class="font-16">จำนวนเงินถอน</span></p>
                    </div>
                </div>
            </div>
            <div class="container head-center">
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 head-center ">
                        <p class="date">0.00 <br> <span class="font-16">ยอดรวมได้เสีย</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


{{-- บัญชี --}}

<div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight5" aria-labelledby="offcanvasRightLabel5">
        <div class="offcanvas-header head ">
            <div class="head-center"></div>
            <h5 class="text">บัญชี</h5>
            <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-body offcanvas-color">
            <div class="gift ">
                <img src="{{ asset('/image/empty-image.png') }}" class="img-shop-tb-2" alt="...">
                <p class="font-16"> ไม่มีข้อมูล</p>
            </div>
        </div>
    </div>
</div>


{{-- บัญทึการจอง --}}

{{-- <div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight6" aria-labelledby="offcanvasRightLabel6">
        <div class="offcanvas-header head ">
            <div class="head-center"></div>
            <h5 class="text">ห้างสรรพสินค้า</h5>
            <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-body offcanvas-color">
            <div class="container inpput-boder">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav>
                            <div class="nav nav-tabs span" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">ทั้งหมด</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">ชนะ</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">ที่จะจับคู่</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact2"
                                    aria-selected="false">ยกเลิก</button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="container logo-center">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <img src="{{ asset('/image/empty-image.png') }}" class="img-shop-tb-2" alt="...">
                                <p class="font-16"> ไม่มีข้อมูล</p>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <img src="{{ asset('/image/empty-image.png') }}" class="img-shop-tb-2" alt="...">
                                <p class="font-16"> ไม่มีข้อมูล</p>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <img src="{{ asset('/image/empty-image.png') }}" class="img-shop-tb-2" alt="...">
                                <p class="font-16"> ไม่มีข้อมูล</p>
                            </div>
                            <div class="tab-pane fade" id="nav-contact2" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <img src="{{ asset('/image/empty-image.png') }}" class="img-shop-tb-2" alt="...">
                                <p class="font-16"> ไม่มีข้อมูล</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 footer-button">
                <button type="button" class="btn btn-outline-light comm-botton" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="shopping-location">สั่งซื่อเลย</button>
            </div>
        </div>
    </div>
</div> --}}


{{-- โปรไฟล์ --}}

<div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight7" aria-labelledby="offcanvasRightLabel7">
        <div class="offcanvas-header head ">
            <div class="head-center"></div>
            <h5 class="text">ข้อมูลพื้นฐาน</h5>
            <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body offcanvas-color ">
            <div class="margin-user">
                <div class="border-th">
                    <p  class="text span"><br>รูปโปรไพล์ <img src="{{asset('/image/avatar90.png')}}" class="avatar set-avatar90" alt="..."> </p>
                    <br>
                </div>
                  <br>
                  <div class="border-th">
                    <p  class="text span ">ชื่อจริง <span>
                        @if(Session::has('username'))
                            {{Session::get('username')}}
                        @else
                        ยังไม่ได้ตั้งค่า
                        @endif
                     &nbsp;&nbsp;&nbsp;</span></p>
                  </div>
                  <br>
                  <div class="border-th">
                    <p  class="text span">เพศ <span>ชาย &nbsp;&nbsp;&nbsp;</span></p>
                  </div>
                  <br>
                  <div class="border-th">
                    <p  class="text span">ชื่อเล่น<span>{{Auth::user()->username}} &nbsp;&nbsp;&nbsp;</span></p>
                  </div>
                  <br>
                  <div class="border-th">
                    <p  class="text span">ผูกมัดบัญชี<span>
                        @if(Session::has('bank_name'))
                            {{Session::get('bank_name')}}
                        @else
                        ไม่มี
                        @endif
                        &nbsp;&nbsp;&nbsp;</span></p>
                  </div>
                  <br>
                  <div class="border-th">
                    <p  class="text span">หมายเลขโทรศัพท์ <span>****+66 &nbsp;&nbsp;&nbsp;</span></p>
                  </div>
            </div>
        </div>
    </div>
</div>


{{-- ตั้งค่า --}}


<div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight8" aria-labelledby="offcanvasRightLabel8">
        <div class="offcanvas-header head ">
            <div class="head-center"></div>
            <h5 class="text">ตั้งค่า</h5>
            <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body offcanvas-color">
             <div class="border-th">
                    <p  class="text span">การตั้งค่าข้อมูลพื้นฐาน<span>ไม่มี &nbsp;&nbsp;&nbsp;</span></p>
             </div>
             <br>
             <div class="border-th">
                 <a href="editUser"  class="text-decoration" >
                    <p  class="text span">รหัสผ่าน<span>ไม่มี &nbsp;&nbsp;&nbsp;</span></p>
                 </a>
             </div>
             <br>
             <div class="border-th">
                    <p  class="text span">รหัสถอนเงิน<span>ตั้งค่าแล้ว &nbsp;&nbsp;&nbsp;</span></p>
             </div>
             <br>
             <div class="border-th">
                 <a href="general"  class="text-decoration" >
                     <p  class="text span">ตั้งค่าทั่วไป<span>ไม่มี &nbsp;&nbsp;&nbsp;</span></p>
                </a>
                    
             </div>
             <br>
             <div class="border-th">
                 <a href="comment" class="text-decoration">
                    <p  class="text span">แสดงความคิดเห็น<span>ไม่มี &nbsp;&nbsp;&nbsp;</span></p>
                 </a>
             </div>
             <br>
             <div class="border-th">
                 <a href="Kyoto" class="text-decoration">
                    <p  class="text span">เกียวกับเรา<span>ไม่มี &nbsp;&nbsp;&nbsp;</span></p>
                 </a>
             </div>
             <br>
             <div class="logo-center">
                <button type="submit" class="btn btn-outline-light contact col-12 col-md-8 text" 
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" >
                            ออกจากระบบ
                        </button>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>