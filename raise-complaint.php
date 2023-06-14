<!DOCTYPE html>
<?php
    require("config.php");
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint-Page</title>
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
<body style="background-color: skyblue;">
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

    <div class="complaint-main">
       
        <div class="formdiv col-lg-8 col-11">
            <form action="raise-upload.php" method="post" enctype="multipart/form-data">
                <div class="rrow">
                    <div class="input-col col-lg-6 col-12">
                        <h1>Name : </h1>
                        <input type="text" name="fname" required autocomplete="off">
                    </div>
                    <div class="input-col col-lg-6 col-12">
                        <h1>Phone Number : </h1>
                        <input type="text" name="phnum" required autocomplete="off">
                    </div>
                </div>
                <div class="rrow">
                    <div class="input-col col-lg-6 col-12">
                        <h1>Address : </h1>
                        <input type="text" name="address" required autocomplete="off">
                    </div>
                    <div class="input-col col-lg-6 col-12">
                        <h1>Landmark : </h1>
                        <input type="text" name="landmark" required autocomplete="off">
                    </div>
                </div>
                <div class="rrow">
                    <div class="input-col col-lg-6 col-12">
                        <h1>Image : </h1>
                       <div class="img-input">
                        <input type="file" style="padding:0.7% 2%" required name="file">
                      </div>
                    </div>
                    <div class="input-col col-lg-6 col-12">
                        <h1>Available Timings From to When: </h1>
                        <input type="text" name="timing" required autocomplete="off">
                    </div>
                </div>
                <div class="rrow">
                    <div class="input-col col-lg-6 col-12">
                        <h1>Type Of Garbage : </h1>
                        <select name="typeofgb" id=""> 
                        <option value="wet">Wet Garbage</option>
                        <option value="dry">Dry Garbage</option>
                        <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="input-col col-lg-6 col-12">
                        <h1>Reason : </h1>
                        <input type="text" name="reason" required autocomplete="off">
                    </div>
                </div>
                <div class="rrow">
                    <div class="form-btn">
                        <button type="submit" name="rcsubmit"  class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>



