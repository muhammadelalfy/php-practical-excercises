<?php

if($_SERVER['REQUEST_METHOD']=='POST'){


    $emailSent = $_POST['email'];
    $password = $_POST['password'];

    $mysqli = new mysqli("localhost","root","","test");

// Check connection
if ($mysqli -> connect_errno) {
    
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else
{

    echo "connection succeeded";

}

echo '<br>';


$sql = "INSERT INTO users (username,password)
VALUES ('$emailSent','$password')";
if (mysqli_query($mysqli, $sql)) {
   echo "New record has been added successfully !";
} else {
   echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
}
mysqli_close($mysqli);

}

   