@extends('layouts.app')
@section('content')
    <div class="text-xxl-center">
    <h1 >รายชื่อธุระกิจ</h1>
  </div>
  <br>
  <div class="container">
    <table>
        <tbody>
            <tr>
                <td class="col-3 col-sm-3 col-md-4 " >
                   <a href="{{ URL('challenge/180Shopee')}}" class="text-decoration-none">
                    <img src="{{asset('/image/A-1.png')}}" >
                    <br>
                    <br>
                    <span class="fs-4">180Shopee</span>
                   </a>
                </td>
                <td class="col-3 col-sm-3 col-md-4 " >
                    <a href="{{ URL('challenge/300Lazada')}}" class="text-decoration-none ">
                        <img src="{{asset('/image/A-2.png')}}" >
                    <br>
                    <br>
                    <span class="fs-4">300Lazada</span>
                    <br>
                    <br>
                    </a>
                </td>
                <td class="col-3 col-sm-3 col-md-4 " >
                   <a href="{{ URL('challenge/180Shop')}}" class="text-decoration-none ">
                    <img src="{{asset('/image/A-3.png')}}" >
                    <br>
                    <br>
                    <span class="fs-4">180Shop</span>
                    <br>
                    <br>
                   </a>
                </td>
                <td class="col-3 col-sm-3 col-md-4 " >
                    <a href="{{ URL('challenge/60Advice')}}" class="text-decoration-none ">
                        <img src="{{asset('/image/A-4.png')}}" >
                    <br>
                    <br>
                    <span class="fs-4">60Advice</span>
                    <br>
                    <br>
                    </a>
                </td>
            </tr>
            <tr>
                <td class="col-3 col-sm-3 col-md-4 " >
                    <a href="{{ URL('challenge/300 JDL')}}" class="text-decoration-none ">
                    <img src="{{asset('/image/A-5.png')}}" >
                    <br>
                    <br>
                    <span class="fs-4">300 JD</span></a>
                    <br>
                    <br>
                </td>
                <td class="col-3 col-sm-3 col-md-4 " >
                    <a href="{{ URL('challenge/300Chilindo')}}" class="text-decoration-none ">
                    <img src="{{asset('/image/A-6.png')}}" >
                    <br>
                    <br>
                    <span class="fs-4">300Chilindo</span>
                    <br>
                    <br>
                    </a>
                </td>
                <td class="col-3 col-sm-3 col-md-4 " >
                   <a href="{{ URL('challenge/1200CENTRAL')}}" class="text-decoration-none ">
                    <img src="{{asset('/image/A-7.png')}}" >
                    <br>
                    <br>
                    <span class="fs-4 ">1200CENTRAL</span>
                    <br>
                    <br>
                   </a>
                </td>
                <td class="col-3 col-sm-3 col-md-4" >
                  <a href="{{ URL('challenge/180PowerBuy')}}" class="text-decoration-none ">
                    <img src="{{asset('/image/A-8.png')}}" >
                    <br>
                    <br>
                    <span class="fs-4 ">180PowerBuy</span>
                    <br>
                    <br>
                  </a>
                </td>
            </tr>
        </tbody>
      </table>
  </div>
  


@endsection