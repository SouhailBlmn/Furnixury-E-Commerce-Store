<?php
include_once "_layout-start.php";
?>
<div class="container all-content">
    <div class="products">
        <form id="prod-form" method="post" enctype="multipart/form-data">
            <div class="form-check">
                <label class="form-label">Title : </label>
                <input  type="text" name="title" class="form-control">
            </div>

            <div class="form-check">
                <label class="form-label">Description : </label>
                <textarea name="desc" class="form-control"></textarea>
            </div>

            <div class="form-check">
                <label class="form-label">Product Image : </label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-check">
                <label class="form-label">Price : </label>
                <input  type="number" name="price" class="form-control"></input>
            </div>

            <div class="form-check">
                <label class="form-label">Specs : </label>
                <input  type="text" name="specs" class="form-control">
            </div>

            <div class=" d-none alert alert-success" id="result" role="alert">
                hi
            </div>

            <input name="product-submit" type="submit" class="btn btn-primary" id="button">
        </form>
    </div>
</div>


<?php
include_once "_layout-finish.php";
?>
