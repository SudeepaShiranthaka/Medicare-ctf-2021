<?php

include_once 'config.php';

$blogtitile = $_POST['blogtitile'];
$date = date("Y-m-d");
$content = $_POST['content'];

 $sql="INSERT INTO `blog`( `title`, `content`, `date`) 
VALUES ('$blogtitile','$content', '$date')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('SUCCESS! - Blog Added.');
    window.location.href='dashboard.php';
    </script>";
  }
  else{
    echo "<script>
    alert('FAILED!');
    window.location.href='dashboard.php';
    </script>";
  } 
?>