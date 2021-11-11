<?php

include_once 'config.php';

$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
$address = $_POST['address'];

 $sql="INSERT INTO `appointment`( `patinet_name`, `age`, `telephone`, `email`, `address`, `date`) 
VALUES ('$name','$age', '$phone', '$email', '$address', '$date')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('SUCCESS! - Appointment Submitted');
    window.location.href='../index.html';
    </script>";
  }
  else{
    echo "<script>
    alert('FAILED!');
    window.location.href='../appointment/appointment.html';
    </script>";
  } 
?>
