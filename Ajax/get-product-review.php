<?php
$Data=(array)json_decode(key($_POST));
$Prod_Id=$Data['prod_id'];
echo $Prod_Id;