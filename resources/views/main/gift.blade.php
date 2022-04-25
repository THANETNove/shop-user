<div class="head">
    <p class="center text-head" onclick="locationReload()">ของขวัญ</p>
</div>
@if(Session::has('dataJoin'))
<div class="col-12 col-md-12 table-responsive">
  <table class="table table-bordered text-table">
    <thead>
        <tr>
          <th scope="col">รอบที่</th>
          <th scope="col">#</th>
          <th scope="col">ชื่อสินค้า</th>
          <th scope="col">ขนาด</th>
          <th scope="col">จำนวนเงิน</th>
          <th scope="col">ที่ออก</th>
          <th scope="col">วันที่</th>
        </tr>
      </thead>
    <tbody>
        @php
         $idUser = 1;   
        @endphp
        @foreach (Session::get('dataJoin') as $line)
            <tr class="onClickBtn" >
                    <td class="col-3 col-sm-3 col-md-3" >
                        {{ $idUser++ }} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-3 ">
                      {{ $line->numberCount }} 
                  </td>
                    <td class="col-3 col-sm-3 col-md-3">
                      {{ $line->product_name }} 
                    </td>
                    <td class="col-3 col-sm-3 col-md-3 ">
                      {{ $line->finished_size }} 
                    </td>
                <td class="col-3 col-sm-3 col-md-2" >
                  @php
                  $moneyAll =  number_format( $line->price,2)
                 @endphp
                   {{ $moneyAll }} 
                </td>
                <td class="col-3 col-sm-3 col-md-3 ">
                  {{ $line->won_prize }} 
                </td>
                <td class="col-3 col-sm-3 col-md-3 ">
                  {{ $line->created_at }} 
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endif  

{{--  --}}
  <br>
  <br>
  <br>