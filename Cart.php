<?php
include_once "header.php";
$Cart = $_SESSION["cart"];
?>



<<section class="cart-list">

    <div class="container">
        <h2 class="title">Your Cart Items :</h2>
        <div class="row">
	        <?php
	        foreach ($Cart as $item){
		        ?>
                <div class="cart-item">
                    <img src="./Uploads/<?php echo $item['image'] ?>" alt="" class="prod-img">
                    <h2 class="prod-title"><?php echo $item['title']?></h2>
                    <div class="qty">
                        <button class=" btn qty-dec">-</button>
                        <h3 class="qty-txt"><?php echo $item['quantity']?></h3>
                        <button class=" btn qty-dec">+</button>
                    </div>
                    <h2 class="prod-price"><?php echo $item['total_price']?></h2>
                    <button class="btn btn-green btn-chekout">Checkout</button>
                </div>


		        <?php
	        }
	        ?>
        </div>
        <div class="row">
            <div class="col-7"></div>
            <div class="col-5">
                <div class="checkout-sec">
                    <h2 class="total-title">Total: </h2>
                    <h2 class="total-price">$999.99</h2>
                    <button class="btn  btn-green btn-checkout">Checkout</button>
                </div>
            </div>
        </div>
    </div>



</section>


<?php
include_once "footer.php";
?>
