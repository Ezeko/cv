<?php

if(isset($_POST['submit'])){
        $image = $_FILES['fileToUpload']['name'];
  	// Get text
  	//$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "uploads/".basename($image);

  //	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	//mysqli_query($db, $sql);
  	$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
  	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}else if($_FILES['fileToUpload']['size'] > 102000){
  	    echo "file tooo large";
  	   
  	}else if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
    
    }
?>
