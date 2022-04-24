@extends('layouts.home')

@section('content')
<div class="head logo-center">
    <div class="set-back">
        <a href="{{ URL::to('getInvitation')}}">
            <i class="fa-solid fa-arrow-left" style='font-size:28px'></i>
        </a>
    </div>
    <div class="set-head">
        <p  class="text">เพิ่มรหัสคำเชิญ</p>
    </div>
</div>
<br>
<div class="margin-user">
    <div class="border-th">
        <form class="row g-3"  method="POST" action="{{ ('save-code') }}">
            @csrf
            <div class="col-auto col-md-2">
              <label for="staticEmail2" class="text-code">รหัสเชิญ</label>
            </div>
            <div class="col-6  col-md-8">
              <input type="text" class="form-control @error('code') is-invalid @enderror" id="inputCode" value="" name="code" placeholder="กรอกรหัสคำเชิญ">
              @error('code')
                <span class="invalid-feedback" role="alert">
                    <strong style="font-size: 16px" class="text">กรุณากรอกรหัสคำเชิญ</strong>
                </span>
             @enderror
            </div>
            <div class="col-auto  col-md-2">
              <p  class="btn btn-outline-light mb-3" id="newCode">สร้าง</p>
            </div>
           
            <div class="col-auto  col-md-2">
                <label for="staticEmail2" class="text-code">สถานะรหัสเชิญ</label>
            </div>
            <div class="col-6 col-md-10">
                <div class="form-check form-switch"  style="font-size: 30px">
                    <input class="form-check-input"  name="status" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="text-code" for="flexSwitchCheckChecked" id="textSwitch">เปิดใช้งาน</label>
                </div>
              </div>
              <div class="col-auto col-md-2">
                <label for="staticEmail2" class="text-code">ประเภทโปรโหมด</label>
              </div>
              <div class="col-6 col-md-10">
                <select class="form-select" name="enrol" aria-label="Default select example">
                    <option value="การลงทะเบียนเริ่มต้น"> การลงทะเบียนเริ่มต้น</option>
                    <option value="เเพลตฟอร์อย่างเป็นทางการ">เเพลตฟอร์อย่างเป็นทางการ</option>
                  </select>
              </div>
              <div class="col-auto col-md-2">
                <label for="staticEmail2" class="text-code">ส่วนลดตัวแทน</label>
              </div>
              <div class="col-6 col-md-10">
                <select class="form-select" name="percent" aria-label="Default select example">
                    <option value="0% (900)">0% (900)</option>
                    <option value="0.1% (901)">0.1% (901)</option>
                    <option value="0.2% (902)">0.1% (902)</option>
                    <option value="0.3% (903)">0.1% (903)</option>
                    <option value="0.4% (904)">0.1% (905)</option>
                    <option value="0.5% (905)">0.1% (905)</option>
                    <option value="0.6% (906)">0.1% (906)</option>
                    <option value="0.7% (907)">0.1% (907)</option>
                    <option value="0.8% (908)">0.1% (908)</option>
                    <option value="0.9% (909)">0.1% (909)</option>
                    <option value="1% (910)">1% (910)</option>
                    <option value="1.1% (911)">1.1% (911)</option>
                    <option value="1.2% (912)">1.1% (912)</option>
                    <option value="1.3% (913)">1.1% (913)</option>
                    <option value="1.4% (914)">1.1% (914)</option>
                    <option value="1.5% (915)">1.1% (915)</option>
                    <option value="1.6% (916)">1.1% (916)</option>
                    <option value="1.7% (917)">1.1% (917)</option>
                    <option value="1.8% (918)">1.1% (918)</option>
                    <option value="1.9% (919)">1.1% (919)</option>
                    <option value="2% (920)">2% (920)</option>
                    <option value="2.1% (921)">2.1% (921)</option>
                    <option value="2.2% (922)">2.1% (922)</option>
                    <option value="2.3% (923)">2.1% (923)</option>
                    <option value="2.4% (924)">2.1% (924)</option>
                    <option value="2.5% (925)">2.1% (925)</option>
                    <option value="2.6% (926)">2.1% (926)</option>
                    <option value="2.7% (927)">2.1% (927)</option>
                    <option value="2.8% (928)">2.1% (928)</option>
                    <option value="2.9% (929)">2.1% (929)</option>
                    <option value="3% (930)">3% (930)</option>
                    <option value="3.1% (931)">3.1% (931)</option>
                    <option value="3.2% (932)">3.1% (932)</option>
                    <option value="3.3% (933)">3.1% (933)</option>
                    <option value="3.4% (934)">3.1% (934)</option>
                    <option value="3.5% (935)">3.1% (935)</option>
                    <option value="3.6% (936)">3.1% (936)</option>
                    <option value="3.7% (937)">3.1% (937)</option>
                    <option value="3.8% (938)">3.1% (938)</option>
                    <option value="3.9% (939)">3.1% (939)</option>
                    <option value="4% (940)">4% (940)</option>
                    <option value="4.1% (941)">4.1% (941)</option>
                    <option value="4.2% (942)">4.1% (942)</option>
                    <option value="4.3% (943)">4.1% (943)</option>
                    <option value="4.4% (944)">4.1% (944)</option>
                    <option value="4.5% (945)">4.1% (945)</option>
                    <option value="4.6% (946)">4.1% (946)</option>
                    <option value="4.7% (947)">4.1% (947)</option>
                    <option value="4.8% (948)">4.1% (948)</option>
                    <option value="4.9% (949)">4.1% (949)</option>
                    <option value="5% (950)">5% (950)</option>
                    <option value="5.1% (951)">5.1% (951)</option>
                    <option value="5.2% (952)">5.1% (952)</option>
                    <option value="5.3% (953)">5.1% (953)</option>
                    <option value="5.4% (954)">5.1% (954)</option>
                    <option value="5.5% (955)">5.1% (955)</option>
                    <option value="5.6% (956)">5.1% (956)</option>
                    <option value="5.7% (957)">5.1% (957)</option>
                    <option value="5.8% (958)">5.1% (958)</option>
                    <option value="5.9% (959)">4.1% (959)</option>
                    <option value="6% (960)">6% (960)</option>
                    <option value="6.1% (961)">6.1% (961)</option>
                    <option value="6.2% (962)">6.1% (962)</option>
                    <option value="6.3% (963)">6.1% (963)</option>
                    <option value="6.4% (964)">6.1% (964)</option>
                    <option value="6.5% (965)">6.1% (965)</option>
                    <option value="6.6% (966)">6.1% (966)</option>
                    <option value="6.7% (967)">6.1% (967)</option>
                    <option value="6.8% (968)">6.1% (968)</option>
                    <option value="6.9% (969)">6.1% (969)</option>
                    <option value="7% (970)">7% (970)</option>
                    <option value="7.1% (971)">7.1% (971)</option>
                    <option value="7.2% (972)">7.1% (972)</option>
                    <option value="7.3% (973)">7.1% (973)</option>
                    <option value="7.4% (974)">7.1% (974)</option>
                    <option value="7.5% (975)">7.1% (975)</option>
                    <option value="7.6% (976)">7.1% (976)</option>
                    <option value="7.7% (977)">7.1% (977)</option>
                    <option value="7.8% (978)">7.1% (978)</option>
                    <option value="7.9% (979)">7.1% (979)</option>
                    <option value="8% (970)">8% (980)</option>
                    <option value="8.1% (981)">8.1% (981)</option>
                    <option value="8.2% (982)">8.1% (982)</option>
                    <option value="8.3% (983)">8.1% (983)</option>
                    <option value="8.4% (984)">8.1% (984)</option>
                    <option value="8.5% (985)">8.1% (985)</option>
                    <option value="8.6% (986)">8.1% (986)</option>
                    <option value="8.7% (987)">8.1% (987)</option>
                    <option value="8.8% (988)">8.1% (988)</option>
                    <option value="8.9% (989)">8.1% (989)</option>
                    <option value="9% (990)">9% (900)</option>
                    <option value="9.1% (991)">9.1% (991)</option>
                    <option value="9.2% (992)">9.1% (992)</option>
                    <option value="9.3% (993)">9.1% (993)</option>
                    <option value="9.4% (994)">9.1% (994)</option>
                    <option value="9.5% (995)">9.1% (995)</option>
                    <option value="9.6% (996)">9.1% (996)</option>
                    <option value="9.7% (997)">9.1% (997)</option>
                    <option value="9.8% (998)">9.1% (998)</option>
                    <option value="9.9% (999)">9.1% (999)</option>
                    <option value="10% (1000)">10% (1000)</option>
                  </select>
              </div>
              <div class="logo-center">
                <button type="submit" class="btn btn-outline-light">สร้างรหัสเชิญ</button>
              </div>
        </form>
        <br>
    </div>
</div>

@endsection
