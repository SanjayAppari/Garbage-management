<!DOCTYPE html>
<?php
    require("config.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Registration</title>
    <script src="https://kit.fontawesome.com/d1eb574a3d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- My css file -->
    <link href="style.css?<?=filemtime("style.css")?>" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- navbar starting -->
    <div id="navbar-div">

    </div>
    <script>
        $(function(){
            $("#navbar-div").load("navbar.php");
        })
    </script>
<!-- navbar ending -->

<!-- registration form starting-->
  
    <div class="registration-main">
        <div class="registration-div col-lg-4 col-11">
            <center>
            <p class="heading-form">REGISTRATION FOR DRIVER</p>
            <form action="" method="POST">

              <div class="row">
                <div class="registration-form-col col-lg-6 col-12">
                    <h6>FULL NAME</h6>
                    <input type="text" name="fname" autocomplete="off">
                </div>
                <div class="registration-form-col col-lg-6 col-12">
                    <h6>USER NAME</h6>
                    <input type="text" name="username" autocomplete="off">
                </div>
             </div>

             <div class="row">
                <div class="registration-form-col col-lg-6 col-12">
                    <h6>EMAIL</h6>
                    <input type="email" name="email" autocomplete="off">
                </div>
                <div class="registration-form-col col-lg-6 col-12">
                    <h6>PHONE NUMBER</h6>
                    <input type="text" name="phnum" autocomplete="off">
                </div>
             </div>
             <div class="row">
                <div class="registration-form-col col-lg-6 col-12">
                    <h6>PASSWORD</h6>
                    <input type="password" name="password" autocomplete="off">
                </div>
                <div class="registration-form-col col-lg-6 col-12">
                    <h6>CONFIRM PASSWORD</h6>
                    <input type="password" name="cpassword" autocomplete="off">
                </div>
             </div>
             <div class="row">
                <div class="registration-form-col1 col-lg-10 col-12">
                <input  type="submit"  name="Registration-driver" class="mybtn"  value="SUBMIT">
                </div>
             </div>
            </form>
            <br>
            <p>Already have an Driver Account ? Click Here To <a href="login-driver.php">Log In</a></p>
        </center>
        </div>
    </div>
<!-- registration form ending-->




</body>
</html>



<?php
    
    if(isset($_POST['Registration-driver'])){
        // echo"ki";
        $fname=$_POST['fname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $phnum=$_POST['phnum'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        if($password!=$cpassword){
            echo"<script>alert('Enter Same Password');</script>";
        }
        else{
            $sql="select * from `register-driver` where (username='$username' or email= '$email');";
            $res=mysqli_query($con,$sql);
            if(mysqli_num_rows($res) > 0){
                $row=mysqli_fetch_assoc($res);
                if($username==$row['username']){
                    echo"<script>alert('Username Already Exits');</script>";
                }
                if($email==$row['email']){
                    echo"<script>alert('Email Already Exits');</script>";
                }
            }
            else{
                echo"<script>alert('Registered entered');</script>";
                // $options= array("cost"=>4);
                // $password= password_hash($password,PASSWORD_BCRYPT,$options);
                $query= "insert into `register-driver` (fname,username,email,password,phnum) values ('$fname','$username','$email','$password','$phnum')";
                if(mysqli_query($con,$query)){
                    echo"<script>alert('Registered successfully');</script>";
                    header("location:login-driver.php");
                }
                else{
                    echo"<script>alert('Registered not successfully');</script>";
                }
            }
        }
    }
?>
