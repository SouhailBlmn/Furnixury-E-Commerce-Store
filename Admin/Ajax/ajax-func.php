<?php
include "../../Database/DBController.php";
include "../../Database/ProductsModel.php";

$db= new DBController();

$ProductsModel = new ProductsModel($db);