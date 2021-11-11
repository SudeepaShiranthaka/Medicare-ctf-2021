<?php

    session_start();
    
    include_once 'config.php';

    if (isset($_POST['login'])){
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $status = '1';
    // echo $username;
        
        $sql="SELECT * FROM `xfiltration-ctf{us3r_d4ta_t4b13}` WHERE username='$username' AND password='$pass'";
        //echo "<script>alert('Loggin Successfuly');</script>";
        $result=mysqli_query($conn, $sql);
        $rows=mysqli_num_rows($result);
        if ($rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                if($row['status'] ==  $status) {
                    echo "<script>alert('Loggin Successfuly');</script>";  
                    // $row=$result->fetch_assoc();
                    $uid = $row['ID'];
                    $_SESSION["uid"] = $uid;
                    //echo "<script>alert('Loggin Successfuly');window.location='profile.php';</script>";
                    header('Location:dashboard.php?uid='.$_SESSION['uid']);
                }
                else{
                    echo "<script>
                    alert('You Do not have permission for Login to the System!');
                    window.location.href='../index.html';
                    </script>";
                    //echo "<script>alert('You Do not have permission for Login to the System!');</script>";
                    // header('Location:dashboard.php?uid='.$_SESSION['uid']);
                }
            }
            
        }else{
            echo "<script>
            alert('Invalid User Name or Password');
            window.location.href='login.php';
            </script>";
            // echo "<script>alert('Invalid User Name or Password');</script>";
        }

        $sql="SELECT * FROM `xfiltration-ctf{us3r_d4ta_t4b13}` WHERE username='$username' AND password='$pass'";
        //echo "<script>alert('Loggin Successfuly');</script>";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            if($result['status'] ==  '1') {
                    echo "<script>alert('Loggin Successfuly');</script>";  
                    // $row=$result->fetch_assoc();
                    $uid = $row['ID'];
                    $_SESSION["uid"] = $uid;
                    //echo "<script>alert('Loggin Successfuly');window.location='profile.php';</script>";
                    header('Location:dashboard.php?uid='.$_SESSION['uid']);
                }
                else{
                    echo "<script>
                    alert('You Do not have permission for Login to the System!');
                    window.location.href='../index.html';
                    </script>";
                    //echo "<script>alert('You Do not have permission for Login to the System!');</script>";
                    // header('Location:dashboard.php?uid='.$_SESSION['uid']);
                }   
        }else{
            echo "<script>
            alert('Invalid User Name or Password');
            window.location.href='login.php';
            </script>";
        }  
    }
?>