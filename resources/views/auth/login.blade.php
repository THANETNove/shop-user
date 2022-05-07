@extends('layouts.home')

@section('content')
<div id="mainPage-none"   >
    @include('main.mainPage')  
</div>

 @php
       if (Auth::user()) {
        $name = 1;
       }else{
        $name = 0;
       }
 @endphp

 @if ($name === 1)
    <div id="business-none"  style="display:none">
        @include('main.business')
    </div>
    <div id="gift-none" style="display:none">
        @include('main.gift')
    </div>
    <div id="user-none" style="display:none">
        @include('main.user')
    </div>
    @include('main.offcanvasUser')

@else

@include('main.login')
@endif
@include('layouts.navbarFooter') 
{{-- @include('index.home')  --}}

@endsection
