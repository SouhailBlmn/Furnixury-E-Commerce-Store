<?php
include_once "_layout-start.php";
include_once "./functions.php";
?>
<div class="container all-content">

    <?php $ProdList = $ProductsModel->GetAllProducts(); ?>

    <a class="btn btn-success" href="add-product.php">New Product</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
       <?php foreach ($ProdList as $Product){
           ?>

           <tr>
               <th scope="row"><?php echo $Product['id'] ?></th>
               <td><?php echo $Product['ProdName'] ?></td>
               <td><?php echo $Product['Price'] ?></td>
               <?php $imgPath='../Uploads/'.$Product['ProdImg'];
               $id=$Product['id'];?>
               <td><?php echo "<img class='prod-img-thumb' src=$imgPath >" ?></td>
               <td><a class="btn btn-primary" href="/admin/update.php?id=<?php echo "$id" ?>">Update</a>
                   <a class="btn btn-danger" href="/admin/delete.php?id=<?php echo "$id" ?>">Delete</a>
               </td>
           </tr>

       <?php
       } ?>


        </tbody>
    </table>

</div>


<?php
include_once "_layout-finish.php";
?>
