
<script type="text/JavaScript">
$(document).ready(function(){
    getConutNumber();
    byeConun();
  $(".navbarFooter").click(function(){
    let id =  $(this).attr('id');
   let status =  $(this).attr('value');

    if (id === 'home') {
        $("#home").addClass("active");
        $("#mainPage-none").show();
    }else{
        $("#home").removeClass("active");
        $("#mainPage-none").hide();
    }
    if (id === 'location') {
        $("#location").addClass("active");
        $("#business-none").show();
    }else{
        $("#location").removeClass("active");
        $("#business-none").hide();
    }
    if (id === 'gift') {
        $("#gift").addClass("active");
        $("#gift-none").show();
        dataJoin();

    }else{
        $("#gift").removeClass("active");
        $("#gift-none").hide();
    }
    if (id === 'user') {
        $("#user").addClass("active");
        $("#user-none").show();
        
    }else{
        $("#user").removeClass("active");
        $("#user-none").hide();
    }

    if (status === '0') {
        $(document).ready(function(){
            $('#onClickRegister').trigger('click');
            $("#home").addClass("active");
            $("#location").removeClass("active");
            $("#gift").removeClass("active");
            $("#user").removeClass("active");
            $("#mainPage-none").show();
            $("#form-login").show();
            $("#form-subscribe").hide();
        });
    }
  });
  
});
$( "#forgotError" ).click(function() {
    $("#forgot-error").show();
});


$( "#subscribe" ).click(function() {
    $("#form-login").hide();
    $("#form-subscribe").show();
});
$( "#subscribe-bcak" ).click(function() {
    $("#form-login").show();
    $("#form-subscribe").hide();
});

  var currentLocation = window.location.pathname;
              /**
                  * !  เเก้ลิงค์
                  */
 //if (currentLocation === '/Hm-7UQjf9.r18Z/public/index') { 
 if (currentLocation === '/index') {  
    $("#user").addClass("active");
    $("#user-none").show();
    $("#home").removeClass("active");
    $("#mainPage-none").hide();
    
    $('#clickOffcanvas').trigger('click');
}   

function functionCopy() {
    let copy = document.getElementById("codeCopy").innerHTML;

    navigator.clipboard.writeText(copy);
    let textValue = `<button type="button" class="btn btn-outline-light">คัดลอกเเล้ว</button>`;
     document.getElementById('idCopy').innerHTML = textValue;

    setTimeout(() => {
        let text = `<button type="button" class="btn btn-outline-light">คัดลอก</button>`;
        document.getElementById('idCopy').innerHTML = text;
    }, 1000); 
}



$( "#newCode" ).click(function() {
    const n = 999999999 - 100000000  + 1;
    let result = Math.floor(Math.random() * n) + 100000000;
    document.getElementById('inputCode').value = result;
});

$( "#flexSwitchCheckChecked" ).click(function() {
    let value = document.getElementById("flexSwitchCheckChecked").checked;
    if (value  === true) {
        document.getElementById('textSwitch').innerHTML = "เปิดใช้งาน";
        
    }else{
        document.getElementById('textSwitch').innerHTML = "ปิดใช้งาน";
    }
});

function functionDestroy(e) {
    jQuery.ajax({
                 /**
                  * !  เเก้ลิงค์
                  */
        //url: '/Hm-7UQjf9.r18Z/public/gatAjax', 
       url: '/gatAjax',
        method: 'post',
        data: {
            "_token": "{{ csrf_token() }}",
            id: e,
            },
        success: function(result){
            let id = result.id;
            let code = result.code;
            let enrol = result.enrol;  
            let percent = result.percent;  
            document.getElementById('codeCopy').innerHTML = code;
            document.getElementById('typeEnrol').innerHTML = enrol;
            document.getElementById('percentAtive').innerHTML = percent;
            document.getElementById('destroyId').value = id;
            $('#onClickOffcanvasBottom1').trigger('click');
                     
            },
        error: function(result){
        }      
    });  
}
$( "#destroyId" ).click(function() {

    if(confirm()){
     let id =  document.getElementById('destroyId').value;
     jQuery.ajax({
                /**
                  * !  เเก้ลิงค์
                  */
        //url: `/Hm-7UQjf9.r18Z/public/gatDestroy/${id}`, 
        url: `/gatDestroy/${id}`,  
        method: 'get',
        data: {
            "_token": "{{ csrf_token() }}",
            },
        success: function(result){
            window.location.reload(true);
                     
            },
        error: function(result){
        }      
    }); 

    }
});

var locationLogin = window.location.pathname;

console.log('locationLogin',locationLogin); 

 window.onload = (event) => {
               /**
                  * !  เเก้ลิงค์
                  */
             //if (currentLocation === '/Hm-7UQjf9.r18Z/public/login') {   
            if (currentLocation === '/login') { 
                
                   $('#onClickRegister').trigger('click');
                    $("#home").addClass("active");
                    $("#location").removeClass("active");
                    $("#gift").removeClass("active");
                    $("#user").removeClass("active");
                    $("#mainPage-none").show();
                    $("#form-login").show();
                    $("#form-subscribe").hide();
                    console.log('asdasdas'); 
            }  
        };


$( function() {
    $( ".datepicker" ).datepicker();
  });

var currentLocation = window.location.pathname;
                /**
                  * !  เเก้ลิงค์
                  */
    //if (currentLocation === '/Hm-7UQjf9.r18Z/public/user') {  
    if (currentLocation === '/user') {  
        window.onload = (event) => {
                    $("#user").addClass("active");
                    $("#user-none").show();
                    $("#home").removeClass("active");
                    $("#mainPage-none").hide();
    
            console.log('window.onload');
        };
}
var currentLocation = window.location.pathname;
                /**
                  * !  เเก้ลิงค์
                  */
   //if (currentLocation === '/Hm-7UQjf9.r18Z/public/shop') {  
    if (currentLocation === '/shop') {  
        window.onload = (event) => {
            $("#location").addClass("active");
            $("#business-none").show();
            $("#home").removeClass("active");
            $("#mainPage-none").hide();
            console.log('window.onload');
        };
}


    console.log(currentLocation);
                /**
                  * !  เเก้ลิงค์
                  */
  //if (currentLocation === '/Hm-7UQjf9.r18Z/public/set-up') {   
  if (currentLocation === '/set-up') {   
        window.onload = (event) => {
                    $("#user").addClass("active");
                    $("#user-none").show();
                    $("#home").removeClass("active");
                    $("#mainPage-none").hide();
            $('#canvasRight8').trigger('click');

        };
}


$( "#reload").click(function() {

    reloadMoney();
  
});

function reloadMoney() {
    jQuery.ajax({
                /**
                  * !  เเก้ลิงค์
                  */
         //url: "/Hm-7UQjf9.r18Z/public/reload-money",
        url: "/reload-money",
        method: 'post',
        data: {
            "_token": "{{ csrf_token() }}",
            },
        success: function(result){
            console.log("result -55",result);
            let money = `จำนวนเงินคงเหลือ  ${result} ฿`;
            document.getElementById('idMoneShop').innerHTML = money;

            },
        error: function(result){
            console.log(result);
        }      
    });   
    
}



setInterval(function () {


    var d = new Date(); //get current time
    var seconds = d.getMinutes() * 60 + d.getSeconds(); //convet current mm:ss to seconds for easier caculation, we don't care hours.
    var fiveMin = 60 * 3; //five minutes is 300 seconds!
    var timeleft = fiveMin - seconds % fiveMin; // let's say now is 01:30, then current seconds is 60+30 = 90. And 90%300 = 90, finally 300-90 = 210. That's the time left!
    var result = parseInt(timeleft / 60) + ':' + timeleft % 60; //formart seconds back into mm:ss 
    var timedown = `00:0${result}`;
    document.getElementById('countingdown').innerHTML = timedown;
    
 /**
  * ! ส่วนของการดึงข้อมูลมาเเสดง
 */
    var fiveMin = 60 * 1;
    var timeleft2 = fiveMin - seconds % fiveMin; // let's say now is 01:30, then current seconds is 60+30 = 90. And 90%300 = 90, finally 300-90 = 210. That's the time left!
    var result2 = parseInt(timeleft2 / 60) + ':' + timeleft2 % 60; //formart seconds back into mm:ss 

    
             if (result2 == '1:0') {
                getConutNumber();
                byeConun();
            } 
 
}, 1000) //calling it every 0.5 second to do a count down
 

function getConutNumber() {
    let name_shop = $("#room").text();

     jQuery.ajax({
                /**
                  * !  เเก้ลิงค์ ดึง หรัสสินค้า กับ ผล ผลทายรอบก่อนหน้า
                  */
               //url: `/Hm-7UQjf9.r18Z/public/getConutNumber`, 
               url: `/getConutNumber`,
              
                method: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    name_shop: name_shop,
                    },
                success: function(result){
                    console.log(result);
     

                     document.getElementById('re-number').innerHTML = `รหัสสินค้า ${result[0]}`;
                     document.getElementById('won_prize').innerHTML = result[1];  
                     document.getElementById('won_prize1').innerHTML = result[2]; 
                    },
                error: function(result){

                }      
             }); 
        
    }


    /**
     * !  เเก้ลิงค์   add ผล user   เเละเเสดงจำนวนเงิน
    */


    function byeConun() {

                jQuery.ajax({
                    /**
                  * !  เเก้ลิงค์   add ผล user   เเละเเสดงจำนวนเงิน
                  */
                //url: "/Hm-7UQjf9.r18Z/public/byeConun", 
                 url: "/byeConun", 
                    method: 'post',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        },
                    success: function(result){
                        let money =  `จำนวนเงินคงเหลือ  ${result[0].money} ฿`;
                        document.getElementById('idMoneShop').innerHTML = money;
                        document.getElementById('modeyUser').innerHTML = money;
                        },
                    error: function(result){
                    }       
                });   
}



function setPrize() {
    setTimeout(() => {
             document.getElementById('won-prize').innerHTML = ``;
         }, 1000); 
}

$( ".nameShop" ).click(function() {
 let text = $(this).text();
 document.getElementById('nameshop-1').value = text.trim();
});





$( "#buy-shop" ).click(function() {
        var contTime =  document.getElementById('re-number').innerHTML;
        var money =  document.getElementById('money-user').innerHTML;
        var back_piece =  document.getElementById('back_piece').value;
        var name = document.getElementById('nameshop-1').value;
        let size =  document.getElementById('size').value;
        let price =  document.getElementById('price').value;
       let conettimeNumber =  contTime.substring(11);

        let money2 =   Number(money.replace(/,/g,'')); 

        let chick  =     $("#re-number").text();
            if ( chick === 'รหัสสินค้า ยังไม่ได้เปิด') {
                document.getElementById('buy-shop').innerHTML = `ไม่สามารถซื้อไม่ได้`;
              
            }else{
                if (money2 >= Number(price)) {

                    jQuery.ajax({
                        /**
                         * !  เเก้ลิงค์
                         */
                     //url: "/Hm-7UQjf9.r18Z/public/buy",  
                    url: "/buy",   
                        method: 'post',
                    data: {
                        "_token": "{{ csrf_token() }}",
                            name: name,
                        size: size,
                        price: price,
                        back_piece: back_piece,
                        numberCount: conettimeNumber 
                        },
                    success: function(result){
                            document.getElementById('error-price').innerHTML = contTime; 
                            document.getElementById('numberShopUser').innerHTML = `รอบที่ ${conettimeNumber}` 
                            reloadMoney();
                        
                                setTimeout(() => {
                                    $('#close').trigger('click');
                                }, 1000);  

                        
                        },
                    error: function(result){
                    }       
                    });  
                    }else{
                    document.getElementById('error-price').innerHTML = "ยอด เงินของคุณไม่พอ กรุณาเติมเงิน";
                    }  
            }
         

});



 
$( ".product-price" ).click(function() {
        let text = $(this).text();
        
        let id = $(this).attr('id');
        console.log(id);
        var money = "";

        if (text.trim() === '1 k') {
            money += "1000";
        }else if (text.trim() === '2.5 k') {
            money += "2500";
        }else if (text.trim() === '5 k') {
            money += "5000";
        }else{
            money += text;
        }

        document.getElementById('price').value = money.trim();
        let icon = `<i class="fa-solid fa-tag" style='font-size:40px;color: #fff'></i> <p>${text}</p>`;
            document.getElementById(id).innerHTML = icon;

});

function dataJoin() {

        jQuery.ajax({
                 /**
                  * !  เเก้ลิงค์
                  */
                //url: "/Hm-7UQjf9.r18Z/public/dataJoin", 
               url: "/dataJoin",  
                method: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    },
                success: function(result){

                  console.log(result);
                    
                    },
                error: function(result){

                }      
            });   
}


function locationReload() {
    location.reload();
}

setInterval(() => {
  jQuery.ajax({
      /**
    * !  เเสดงจำนวนเงิน
    */
  //url: "/Hm-7UQjf9.r18Z/public/getMoney", 
  url: "/getMoney", 
      method: 'get',
      data: {
          "_token": "{{ csrf_token() }}",
          },
      success: function(result){
          let money =  `จำนวนเงินคงเหลือ  ${result[0].money} ฿`;
          document.getElementById('modeyUser').innerHTML = money;
          },
      error: function(result){
      }       
  });
}, 1000);


 
$("#add-bonuses").click(function() {

jQuery.ajax({
    /**
    * !  เเสดงจำนวนเงิน
    */
  //url: "/Hm-7UQjf9.r18Z/public/get_bonuses", 
  url: "/get_bonuses", 
      method: 'get',
      data: {
          "_token": "{{ csrf_token() }}",
          },
      success: function(result){
       
            if (result != "0") {
                let bonus = [];
                for (let i = 0; i < result[0].length; i++) {
                        console.log(result);

                        if (result[1] >= result[0][i].percentUser) {
                            bonus +=  `
                                <div class="box1 head-center head-top">
                                    <h6>เติม${result[0][i].percentUser} ได้รับโบนัส${result[0][i].bonus}</h6>
                                    <button type="button" class="btn btn-outline-secondary" onclick="addBonuses(${result[0][i].id})">รับ</button>
                                </div>`;
                        }else{
                            bonus +=  `
                        <div class="box1 head-center head-top">
                            <h6>เติม${result[0][i].percentUser} ได้รับโบนัส${result[0][i].bonus}</h6>
                            <button type="button" class="btn btn-outline-danger">รับไม่ได้</button>
                        </div>`;

                        } 
                    }
                document.getElementById('bonuses-box').innerHTML = bonus;
                
            }else{
                document.getElementById('bonuses-box').innerHTML = "รับโบนัสหมดเเล้ว";
            }
   
          },
      error: function(result){
      }       
  });
});

function addBonuses(e) {
    jQuery.ajax({
    /**
    * !  เเสดงจำนวนเงิน
    */
    //url: "/Hm-7UQjf9.r18Z/public/add_bonuses", 
    url: "/add_bonuses", 
        method: 'post',
        data: {
            "_token": "{{ csrf_token() }}",
            id: e,
            },
        success: function(result){
            $('#add-bonuses').trigger('click');
          /*   document.getElementById('bonuses-box').innerHTML = bonus; */
            },
        error: function(result){
        }       
    });
}


</script>
