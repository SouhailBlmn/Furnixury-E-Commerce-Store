$(document).ready((e)=>{
    console.log('ready');
    // ('form').on('submit',(function(e){
    //     e.preventDefault();
    //     console.log('works');
    //     $.ajax({
    //         url: "process.php",
    //         type: "POST",
    //         data:  new FormData(this),
    //         contentType: false,
    //         cache: false,
    //         processData:false,
    //         success: function(data){
    //             $("#result").html(data);
    //         },
    //         error: function(){}
    //     });
    // }));

    $('#prod-form').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: "./ajax/process.php",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(data){
                        $("#result").removeClass('d-none');
                        $("#result").html(data);
                    },
                    error: function(){}


        });

        console.log('clicked')
    });
});