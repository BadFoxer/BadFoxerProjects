<?php
class uploader{

// initialize variables 
private  $image; 
private  $temp_name;
private  $img_size;
private  $img_type;
private  $target;
private  $imageFileType;


public function __construct(){

  $this->image = $_FILES['image']['name']; // image name
  $this->temp_name = $_FILES['image']['tmp_name']; // image temporary name
  $this->img_size = $_FILES['image']['size']; // image file size
  $this->img_type = $_FILES['image']['type']; // image file type
  $this->target = "asd/".basename($this->image); // specifies the directory where the file is going to be placed

    // The pathinfo() function returns an array that contains information about a path.
    //PATHINFO_EXTENSION - return only extension its mean jpg,png,txt and etc..
    $this->imageFileType = strtolower(pathinfo($this->target,PATHINFO_EXTENSION));
         // PATHINFO_BASENAME - return only basename that means full name of file like: image.png,test.txt,words.pdf and ect...
       $this->imagefullName = strtolower(pathinfo($this->target,PATHINFO_BASENAME));


  }

public  function checkImg(){ // image upload check function

       if(empty($this->temp_name)){ // if image are not selected
  echo "choose picture"; // print out
  }

    // check  image formats
else if($this->imageFileType != "jpg" && $this->imageFileType != "png" && $this->imageFileType != "jpeg"
    && $this->imageFileType!= "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

}

 else if($this->img_size > 50000){  // check image size

   echo "image is too large"; // print out 
   
}


 else if (file_exists($this->target)) { //  check if file exists in directory
    echo "Sorry, file already exists."; // print out 
   
}
  else{
    move_uploaded_file($this->temp_name, $this->target); // put image in to folder
      echo "sucess"."</br>". $this->imagefullName; // if its all ok print out
}
  
}
// function ends here
} // class end here


if(isset($_POST['submit'])){  // button are pressed
 $upload = new uploader(); // create new instance
 $upload->checkImg(); // execute function 

}

?>
