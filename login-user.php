<!DOCTYPE html>
<?php
    require("config.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User LogIn</title>
    <script src="https://kit.fontawesome.com/d1eb574a3d.js" crossorigin="anonymous"></script>
    <!-- my css file -->
    <link href="style.css?<?=filemtime("style.css")?>" rel="stylesheet" type="text/css" />
    <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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

<!-- login form starting  -->
    <div class="login-main">
        <div class="registration-div col-lg-4 col-11">
            <center>
                <p class="heading-form">LOGIN FOR USER</p>
                <form action="login-user-process.php" method="POST">

                    <div class="row">
                      <div class="registration-form-col col-lg-6 col-12">
                          <h6>USER NAME</h6>
                          <input type="text" name="username" autocomplete="off">
                      </div>
                      <div class="registration-form-col col-lg-6 col-12">
                          <h6>PASSWORD</h6>
                          <input type="password" name="password" autocomplete="off">
                      </div>
                   </div>
                   <div class="row">
                      <div class="registration-form-col1 col-lg-10 col-12">
                          <input type="submit" name="login-user" value="SUBMIT" class="mybtn">
                      </div>
                   </div>
                  </form>
                  <br>
                  <p>Don't have an User Account ? Click Here To <a href="Registration-user.php">Register</a></p>
              </center>
        </div>
    </div>
<!-- login form ending  -->
</body>
</html>


