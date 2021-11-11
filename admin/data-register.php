<?php

include_once 'config.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$type = $_POST['type'];


 $sql="INSERT INTO `xfiltration-ctf{us3r_d4ta_t4b13}`( `username`, `password`, `telephone`, `email`, `type`) 
VALUES ('$username','$password', '$mobile', '$email', '$type')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('SUCCESS! - User Added. But User Cannot Log to System until Approve Main Branch Administrator');
    window.location.href='dashboard.php';
    </script>";
  }
  else{
    echo "<script>
    alert('FAILED! - username or email Already USED');
    window.location.href='register.php';
    </script>";
  } 
?>