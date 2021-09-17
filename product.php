<?php
include_once "./header.php";
include "./functions.php";
?>
<?php
$product_id=$_GET['id'];

$Product = $ProductsModel->GetProduct($product_id);

if ($Product==null){

	include "404.php";
	include "footer.php";
    return;
}

$ImagePath=$Product['ProdImg'];
$Title=$Product['ProdName'];
$Description=$Product['ProdDesc'];
$Specs=$Product['Specs'];
$Price=$Product['Price'];


?>

	<section class="prod-details">
		<div class="container">
			<div class="row">
				<div class="col-6 d-flex justify-content-center align-items-center">
                    <img class="prod-img" src="./Uploads/<?php echo $ImagePath?>" alt="">
				</div>
				<div class="col-6 prod-desc">

					<h4 class="cat-titles">Cat1,Cat2</h4>
					<h2 class="prod-title prod-tit-green"><?php echo $Title ?></h2>
					<h4 class="desc-title">Description</h4>
					<p class="desc"><?php echo $Description ?></p>
					<div class="cont">
						<h4 class="price">$<?php echo $Price ?></h4>
                        <form method="post" id="atc">
                            <input id="id" name="id" hidden value="<?php echo $product_id?>">
                            <input name="image" hidden value="<?php echo $ImagePath?>">
                            <input name="title" hidden value="<?php echo $Title?>">
                            <input name="price" hidden value="<?php echo $Price?>">
                            <input id="qty" name="qty" min="1" value="1" type="number">
                            <button name="add-to-cart" type="submit" class="btn btn-green btn-product btn-cart">Add To Cart</button>
                        </form>


					</div>
                    <div id="result" class=" alert alert-success"></div>

                    <form id="product_id_form" method="post">
                        <input hidden name="prod_id" value="<?php echo $product_id ?>">
                    </form>

                    <h4 class="rating-title">Rating :</h4>
					<div class="reviews">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star fa-star-empty"></i>
					</div>

					<h4 class="specs-title">Specs :</h4>
					<ul class="specs">
						<li class="spec">Height : 100cm</li>
						<li class="spec">Width : 150cm</li>
						<li class="spec">Matiere : Metal</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


<?php include_once ('related-prod.php');?>
<?php include_once ('popular-list.php');?>


<?php
include_once "./footer.php"
?>