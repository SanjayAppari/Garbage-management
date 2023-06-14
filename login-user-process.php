<?php
require("config.php");
    if(isset($_POST['login-user'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        // $options= array("cost"=>4);ss
        // $password= password_hash($password,PASSWORD_BCRYPT,$options);
        $query="select * from `register-user` where (username='$username' AND password='$password');";  
        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1){
            session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION['Id']=$row['id'];
            
            $_SESSION['UserId']=$row['username'];
            $_SESSION['FullName']=$row['fname'];
            $_SESSION['Email']=$row['email'];
            $_SESSION['PhNum']=$row['phnum'];
            $_SESSION['Image']=$row['image'];
            // echo($_SESSION['Image']);
            header("location:user-page.php");
        }
        else{
            echo "<script>alert('Incorrect Credentials');</script>";
            header("location:login-user.php");
            }
    }
?>
