<?php

include_once 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$date = date("Y-m-d");


 $sql="INSERT INTO `contact_us`( `name`, `email`, `telephone`, `message`, `date`) 
VALUES ('$name','$email', '$phone', '$message', '$date')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('SUCCESS!');
    window.location.href='../contact_us.html';
    </script>";
  }
  else{
    echo "<script>
    alert('FAILED!');
    window.location.href='../contact_us.html';
    </script>";
  } 
?>