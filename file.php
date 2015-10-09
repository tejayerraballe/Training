<?php
   if(isset($_FILES["text"])){
      $errors= array();
      $file_name = $_FILES["text"]["name"];
      $file_size =$_FILES["text"]["size"];
      $file_tmp =$_FILES["text"]["tmp_name"];
      $file_type=$_FILES["text"]["type"];
      $file_type=$_FILES["text"]["length"];
      //$file_ext=strtolower(end(explode('.',$_FILES["text"]["name"])));
      
      $expensions= array("html","php","css");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a html or css file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
		}
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"text/".$file_name);
         echo "Success"."<br>";
      }
      else{
         print_r($errors);
      }
	
	
   }
	echo "Last Modified : ".date("d/m/Y H:i:s.",getlastmod());
	
	
	$n_chars = strlen($_FILES);
	echo "No.of characters".$n_chars;

	echo "No.of words".$t;
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="text" />
         <input type="submit"/>
			
         <ul>
            <li>Sent file: <?php echo $_FILES["text"]["name"];  ?>
            <li>File size: <?php echo $_FILES["text"]["size"];  ?>
            <li>File type: <?php echo $_FILES["text"]["type"];  ?>
	    <li>characters:<?php echo $_FILES["text"]["strln()"];?>
	    <li>words : <?php echo $_FILES["text"]["count(file())"];?>
         </ul>
			
      </form>
      
   </body>
</html>

