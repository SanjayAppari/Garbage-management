
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
    <title>Editing form</title>
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
<body style="background-color: skyblue; height:100vh; overflow:hidden;  ">
<div class="complaint-main" style="height: 100vh;position:relative;">
       <center><h1 style="padding-top:100px;font-family: 'Satisfy', cursive;
    color: rgb(5, 14, 254);
    text-shadow: 0 0 10px rgb(0, 255, 251);">FeedBack Form</h1></center>
       <div class="formdiv col-lg-8 col-11" style="top:30%" >
        
           <form action="feedback-upload.php" method="post" enctype="multipart/form-data">
               <div class="rrow">
                   <div class="input-col col-lg-6 col-12">
                       <h1>Rating : </h1>
                       <input type="number" min="1" max="5" name="rating">
                       
                   </div>
                   <div class="input-col col-lg-6 col-12">
                       <h1>Contact Number: </h1>
                       <input type="text" name="contact">
                   </div>
               </div>
               
               <div class="rrow">
                   <div class="input-col" style="width:90%; margin-left:-89px">
                       <h1>Feedback : </h1>
                       <textarea name="feedback" id="" cols="30" rows="10"></textarea>
                   </div>
                   
               </div>
              
               <div class="rrow">
                   <div class="form-btn">
                       <button type="submit" name="feedback-submit" class="btn btn-primary">SUBMIT</button>
                   </div>
               </div>
           </form>
       </div>
   </div>
</body>
</html>


