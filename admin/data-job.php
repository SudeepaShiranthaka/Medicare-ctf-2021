<?php

include_once 'config.php';

$jobID = $_POST['jobID'];
$jobtitle = $_POST['jobtitle'];
$employee = $_POST['employee'];
$date = date("Y-m-d");
$deadline = $_POST['deadline'];



 $sql="INSERT INTO `job`( `Job_ID`, `title`, `employee`, `date`, `deadline`) 
VALUES ('$jobID','$jobtitle', '$employee', '$date', '$deadline')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('SUCCESS! - Job Added');
    window.location.href='jobs.php';
    </script>";
  }
  else{
    echo "<script>
    alert('FAILED! - Job ID Already USED');
    window.location.href='jobs_new.php';
    </script>";
  } 
?>