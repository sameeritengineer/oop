<?php

   if(isset($_FILES['image'])){
   	 $errors = array();
   	 $file_name = $_FILES['image']['name'];
   	 $file_size = $_FILES['image']['size'];
   	 $file_tmp = $_FILES['image']['tmp_name'];
   	 $file_type = $_FILES['image']['type'];
   	 $tmp  = explode('.',$file_name);
   	 $file_ext = end($tmp);
   	 $extention = array('jpeg','jpg','png');
   	 if(!in_array($file_ext,$extention)){
   	 	$errors[] = "file extention not allowed";
   	 }
   	 if($file_size > 2000000){
   	 	$errors[] = "file should be lowe than 2MB";
   	 }
      if(empty($errors) ==  true){
       echo "success";
       move_uploaded_file($file_tmp,"images/".$file_name);
      }else{
       echo "errors";
       print_r($errors);
      }
   }
  
?>
<form method="POST" action="" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" name="submit" value="submit">
</form>