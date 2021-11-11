<?php

include_once 'config.php';

$ConfTitle = $_POST['ConfTitle'];
$resource = $_POST['resource'];
$date = $_POST['date'];



 $sql="INSERT INTO `configurations`( `title`, `resource`, `date`) 
VALUES ('$ConfTitle','$resource', '$date')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('SUCCESS! - New Configuration Record Added');
    window.location.href='confugrations-view.php';
    </script>";
  }
  else{
    echo "<script>
    alert('FAILED!);
    window.location.href='add-new.php';
    </script>";
  } 
?>