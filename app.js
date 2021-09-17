$(document).ready((e)=>{

    var prod_id=document.getElementById('id').value;

    $.ajax({

        url: '/ajax/get-product-review.php',
        type: 'post',
        data: JSON.stringify( { "prod_id": prod_id } ),
        processData: false,
        success: function( data ){
            $('#result').html( data );
            console.log('sucess')
        },
        error: function(){
            console.log('error' );
        }
    })

    var reviewData = new FormData(document.getElementById('atc'));

    $('#atc').on('submit',(e)=>{
       e.preventDefault();
       var formdata = new FormData(document.getElementById('atc'));

       $.ajax({
           url: "./ajax/ajax-add-cart.php",
           type: "POST",
           data: formdata,
           contentType: false,
           cache: false,
           processData:false,
           success: function(data){
               $("#result").removeClass('d-none');
               $("#result").addClass('d-block');
               $("#result").html("Item Added . Your Cart Total is $"+data);
               $("#cart_total").html("$"+data);
               console.log('worked')
           },
           error: function(){}

       });

       console.log('clicked')
   }) ;
});