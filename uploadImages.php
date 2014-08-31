<?php
//Сheck that we have a file
if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
   $filename =  $_POST['imageName'];
  //Check if the file is JPEG image and it's size is less than 50MB
  //$filename = basename($_FILES['uploaded_file']['name']);
  $ext = substr($filename, strrpos($filename, '.') + 1);
  if ( ($_FILES["uploaded_file"]["type"] == "image/jpeg") && 
    ($_FILES["uploaded_file"]["size"] < 500000000)) { //
    //Determine the path to which we want to save this file
      $newname = dirname(__FILE__).'/images/CarouselImages/'.$filename.'.jpg';
      //Check if the file with the same name is already exists on the server
      
        //Attempt to move the uploaded file to it's new place
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
           echo "It's done! The file has been saved as: ".$newname;
           echo '<form enctype="multipart/form-data" action="manage.php" method="post">
    <input type="submit" value="See the Changes" />
';
           
        } else {
           echo "Error: A problem occurred during file upload!";
        }
  
  } else {
      echo $_FILES["uploaded_file"]["size"];
     echo "Error: Only .jpg images under 50MB are accepted for upload";
  }
} else {
 echo "Error: No file uploaded";
}
?>