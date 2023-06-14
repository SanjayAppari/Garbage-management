
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
       
       <div class="formdiv col-lg-8 col-11" >
           <form action="edit-form.php" method="post" enctype="multipart/form-data">
               <div class="rrow">
                   <div class="input-col col-lg-6 col-12">
                       <h1>Username : </h1>
                       <input type="text" value="<?php echo($_SESSION['UserId'])?>"name="username">
                   </div>
                   <div class="input-col col-lg-6 col-12">
                       <h1>Full Name : </h1>
                       <input type="text" value="<?php echo($_SESSION['FullName'])?>" name="fullname">
                   </div>
               </div>
               <div class="rrow">
                   <div class="input-col col-lg-6 col-12">
                       <h1>Email : </h1>
                       <input type="email" value="<?php echo($_SESSION['Email'])?>" name="email">
                   </div>
                   <div class="input-col col-lg-6 col-12">
                       <h1>Mobile Number : </h1>
                       <input type="text" value="<?php echo($_SESSION['PhNum'])?>" name="phnum">
                   </div>
               </div>
               <div class="rrow">
                   <div class="input-col" style="width:50%;">
                       <h1>Image : </h1>
                      <div class="img-input" style="height:47px">
                       <input type="file" name="file" style="height:2000px;">
                     </div>
                   </div>
                   
               </div>
              
               <div class="rrow">
                   <div class="form-btn">
                       <button type="submit" name="edit-form" class="btn btn-primary">EDIT</button>
                   </div>
               </div>
           </form>
       </div>
   </div>
</body>
</html>


