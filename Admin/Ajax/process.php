

<?php

$imagePath = null;

if (!empty($_POST['title'])){

	$target_dir = '../../Uploads/';
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["image"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			$uploadOk = 0;
		}

	if ($uploadOk == 0) {
// if everything is ok, try to upload file
	} else {
		$save =move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		if ($save) {
			$imagePath =  htmlspecialchars( basename( $_FILES["image"]["name"]));
		}
	}

	$title=$_POST['title'];
	echo $imagePath;
}