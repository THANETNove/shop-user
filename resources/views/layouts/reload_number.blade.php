<script>
$(document).ready(function(){
    setInterval(function() {

        var d = new Date(); //get current time
        var seconds = d.getMinutes() * 60 + d.getSeconds(); //convet current mm:ss to seconds for easier caculation, we don't care hours.
        var fiveMin = 60 * 5; //five minutes is 300 seconds!
        var timeleft = fiveMin - seconds % fiveMin; // let's say now is 01:30, then current seconds is 60+30 = 90. And 90%300 = 90, finally 300-90 = 210. That's the time left!
        var result = parseInt(timeleft / 60) + ':' + timeleft % 60; //formart seconds back into mm:ss 
        var timedown = `00:0${result}`;

 
            const n = 9999999999 - 1000000000 + 1;
            let numberCount = Math.floor(Math.random() * n) + 1000000000;
            jQuery.ajax({
                   /**
                  * !  เเก้ลิงค์
                  */
               // url: "/Hm-7UQjf9.r18Z/public/timeNumberCount",  
                url: "/timeNumberCount", 
                method: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    number_count: numberCount,
                },
                success: function(result) {
                    console.log("result", result);
                },
                error: function(result) {
                    console.log(result);
                }
            });
    

    },  1000 );
});
</script>