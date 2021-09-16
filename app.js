$(document).ready((e)=>{
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
           },
           error: function(){}

       });

       console.log('clicked')
   }) ;
});