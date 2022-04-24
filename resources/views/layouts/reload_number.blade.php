<script>
$(document).ready(function(){
    setInterval(function() {
        const n = 9999999999 - 1000000000 + 1;
        let numberCount = Math.floor(Math.random() * n) + 1000000000;
        console.log("setIntervalTime ", numberCount);

        jQuery.ajax({
            /*  url: "/Hm-7UQjf9.r18Z/public/reload-money", */
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

    },  300000 );
});
</script>