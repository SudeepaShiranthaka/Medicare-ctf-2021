<?php

    include_once 'config.php';
    session_start();

    if (isset($_POST['login'])){
    $username=$_POST['username'];
    $pass=$_POST['password'];
        
    $sql="SELECT * FROM `xfiltration-ctf{us3r_d4ta_t4b13}` WHERE username='$username' AND password='$pass'";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            $row=$result->fetch_assoc();
            if($row['status'] ==  '1'){
                echo "<script>alert('Loggin Successfuly');</script>";  
                $uid = $row['ID'];
                $_SESSION["uid"] = $uid;
                header('Location:dashboard.php?uid='.$_SESSION['uid']);
            }
            else {
                echo "<script>
                alert('You Do not have permission for Login to the System!');
                window.location.href='../index.html';
                </script>";
            }
        }else{
            echo "<script>
            alert('Invalid User Name or Password');
            window.location.href='userlogin.php';
            </script>";
        }
    }
?>