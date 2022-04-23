<script type="text/JavaScript">
$(document).ready(function(){
   
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

/*  var currentLocation = window.location.pathname;
if (currentLocation === '/shop-user/index') {
    $("#user").addClass("active");
    $("#user-none").show();
    $("#home").removeClass("active");
    $("#mainPage-none").hide();
    
    $('#clickOffcanvas').trigger('click');
}   */

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
            if (currentLocation === '/shop-userNew/public/login') {
                
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
if (currentLocation === '/public/user') {
        window.onload = (event) => {
                    $("#user").addClass("active");
                    $("#user-none").show();
                    $("#home").removeClass("active");
                    $("#mainPage-none").hide();
    
            console.log('window.onload');
        };
}

var currentLocation = window.location.pathname;
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
        url: "/reload-money",
        method: 'post',
        data: {
            "_token": "{{ csrf_token() }}",
            },
        success: function(result){
            console.log("result",result);
            document.getElementById('modeyUser').innerHTML = result; 
            let money = `จำนวนเงินคงเหลือ  ${result} ฿`
            document.getElementById('money-shop').innerHTML = money;
                    
            },
        error: function(result){
            console.log(result);
        }      
    });   
    
}


setInterval(function () {
    var d = new Date(); //get current time
    var seconds = d.getMinutes() * 60 + d.getSeconds(); //convet current mm:ss to seconds for easier caculation, we don't care hours.
    var fiveMin = 60 * 5; //five minutes is 300 seconds!
    var timeleft = fiveMin - seconds % fiveMin; // let's say now is 01:30, then current seconds is 60+30 = 90. And 90%300 = 90, finally 300-90 = 210. That's the time left!
    var result = parseInt(timeleft / 60) + ':' + timeleft % 60; //formart seconds back into mm:ss 
    var timedown = `00:0${result}`;
    document.getElementById('countingdown').innerHTML = timedown;

}, 500) //calling it every 0.5 second to do a count down

$( ".nameShop" ).click(function() {
 let text = $(this).text();
 document.getElementById('nameshop-1').value = text.trim();
});

$( "#buy-shop" ).click(function() {
        var money =  document.getElementById('money-user').innerHTML ;
        var name = document.getElementById('nameshop-1').value;
        let size =  document.getElementById('size').value;
        let price =  document.getElementById('price').value;

        let money2 =   Number(money.replace(/,/g,'')); 
        if (money2 >= Number(price)) {
            jQuery.ajax({
                url: "/buy-shop",
                method: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    name: name,
                    size: size,
                    price: price
                    },
                success: function(result){
                    console.log("result",result);
                    document.getElementById('error-price').innerHTML = result; 
                    reloadMoney();
                            
                    },
                error: function(result){
                    console.log(result);
                }      
            });   
        }else{
            document.getElementById('error-price').innerHTML = "ยอด เงินของคุณไม่พอ กรุณาเติมเงิน";
        }   

});



</script>
