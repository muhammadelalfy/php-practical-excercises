<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
  
  $nameSent = $_POST['name'];
  $emailSent = $_POST['email'];
  $selectSent = $_POST['selected']; 

    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {

      echo "File names : ".$_FILES['file']['name'][$i]."<br>";

      $ext = substr(strrchr($_FILES['file']['name'][$i], "."), 1); 
     
      // generate a random new file name to avoid name conflict
      $fPath = md5(rand() * time()) . ".$ext";
      $target_dir = "C:/xampp/htdocs/php training/uploadMultiFiles/upload/";

      echo "File paths : ".$_FILES['file']['tmp_name'][$i]."<br>";
      $result = move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_dir . $fPath);
     
      if (strlen($ext) > 0){
       echo "Uploaded ". $fPath ." succefully. <br>";
      }
     
     echo "Upload complete.<br>";
     
   echo '<br>';

   global $file_name;
   $file_name = $_FILES['file']['name'];
   $imploded_names = implode(",",$file_name);
   

    
}

$mysqli = new mysqli("localhost","root","","cakedb");

// Check connection
if ($mysqli -> connect_errno) {
    
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else
{

    echo "connection succeeded";

}


$sql = "INSERT INTO insert_test (user_name,email,files,selected)
VALUES ('$nameSent ','$emailSent','  $imploded_names','$selectSent')";
if (mysqli_query($mysqli, $sql)) {
   echo "New files has been added successfully !";
} else {
   echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($mysqli);


}