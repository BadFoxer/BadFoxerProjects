<?php

if(isset($_POST['submit'])){  // button are pressed
    
	$image = $_FILES['image']['name']; // image name
	$temp_name = $_FILES['image']['tmp_name']; // image temporary name
	$img_size = $_FILES['image']['size']; // image file size
	$img_type = $_FILES['image']['type']; // image file type
    $target = "asd/".basename($image); // specifies the directory where the file is going to be placed

    // The pathinfo() function returns an array that contains information about a path.
    //PATHINFO_EXTENSION - return only extension its mean jpg,png,txt and etc..
    $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION)); 
  if(empty($temp_name)){ // if image are not selected
  echo "choose picture"; // print out
  }

else{
    // check  image formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

}

else{

if($img_size > 50000){  // check image size

   echo "image is too large"; // print out
   
}
	else{
		move_uploaded_file($temp_name, $target); // put image in to folder
    	echo 'sucess' . $imageFileType; // if its all ok print out
	
}}}}

?>

<!DOCTYPE html>
<html>
<body>

<form action="uploaderis.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" >
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
