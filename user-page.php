<?php 
    require("config.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <!-- google fonts link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/d1eb574a3d.js" crossorigin="anonymous"></script>
    <!-- my css file -->
    <link href="style.css?<?=filemtime("style.css")?>" rel="stylesheet" type="text/css" />
    <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body >
    <div class="user-page">
     <!-- navbar starting -->
        <div class="title-bar">
            <div id="navbar-div">

            </div>
            <script>
                $(function(){
                    $("#navbar-div").load("user-navbar.php");
                })
            </script>
        </div>
<!-- navbar ending -->
        <div class="user-main">
            <div class="content col-lg-3 col-11">
                <a href="user-profile.php"><h1>View Profile  </h1></a>
            </div>
            <div class="content col-lg-3 col-11">
                <a href="raise-complaint.php"><h1>Raise Request</h1></a>
            </div>
            <div class="content col-lg-3 col-11">
                <a href="feedback-form.php"><h1>FeedBack</h1></a>
            </div>
        </div>
    </div>
</body>
</html>