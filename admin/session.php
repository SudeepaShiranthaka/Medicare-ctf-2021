<?php
    session_start();
	include_once 'config.php';

    if(isset($_SESSION['uid'])){
            }

    else {
      echo "<script>alert('You have No access');window.location='../index.html';</script>";
    }


?>