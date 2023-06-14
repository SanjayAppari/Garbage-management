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
    <title>My Profile</title>
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
    <!-- jquery script -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body style="background-color:skyblue;">
        <div class="title-bar">
            <div id="navbar-div">

            </div>
            <script>
                $(function(){
                    $("#navbar-div").load("user-navbar.php");
                })
            </script>
        </div>
            
<!-- profile details starting  -->
        <div class="profile-details">
            <div class="profile-content col-lg-7 col-12">
                <div class="profile-img col-lg-4 col-5">
                    <div class="img-div" style="box-shadow: 0 0 10px rgb(5, 14, 254) ;">
                        <?php
                            // echo($_SESSION['Image']);
                            if(($_SESSION['Image'])==NULL){
                                // echo"ji";
                                 echo '<img src="images/User-icon.png" alt="">';
                            echo($_SESSION['Image']);
                            }
                            else{
                                $p=$_SESSION['Image'];
                               
                                // echo '<img src="<?php echo()
                            }

                     ?>
                     <img src="<?php echo $p ?>" alt="" style="position:relative; width:100%; height:100%; border-radius:50%">
                    </div>
                </div>
                <div class="profile-text col-lg-8 col-7">
                    <div class="whole-user">
                    <div class="user-username">
                        <b id="username-css"><?php echo($_SESSION['UserId'])?></b> 
                    </div>
                    <br>
                    <div class="user-contact">
                        <b id="user-tags">FULL NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><b id="user-ans"><?php echo($_SESSION['FullName'])?></b><br>
                        <b id="user-tags">EMAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b> <b id="user-ans"><?php echo($_SESSION['Email'])?></b></br>
                        <b id="user-tags">MOBILE NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b> <b id="user-ans"><?php echo($_SESSION['PhNum'])?></b></br>
                        <b id="user-tags">TYPE OF USER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b> <b id="user-ans">USER</b></br>
                    </div> <br>
                    <a href="user-edit-form.php"> <button type="edit" class="btn" style="background-color: rgb(5, 14, 254) ;color:white;border:1px solid skyblue; padding: 3px; padding-left:10px;padding-right:10px; box-shadow: 0 0 5px skyblue;">Edit Profile</button></a>
                </div>
                </div>
            </div>
        </div>
        <hr>
<!-- profile details ending  -->
        <div class="complaint-details">
            <center><h3>My Complaints</h3></center>
            <div class="complaints-flex">
                
                <?php
                  require("config.php");
                  $username= $_SESSION['UserId'];
                  $query="SELECT * FROM `raise-complaint`  where username='$username'";
                  $query_run = mysqli_query($con,$query);
                  $check = mysqli_num_rows($query_run) > 0;
                  if($check)
                 {

                     while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                         <div class="c-card">
                            <div class="c-img">
                                <img src="<?php  echo $row['image'];?>" alt="" style="positon:relative; height:100%; width:100%;border-radius: 10px;">
                            </div>
                            <p style="font-size:20px;margin-bottom:-5px ; "><b>Name :</b> <span><?php  echo $row['name'];?></span></p>
                            <p style="font-size:20px;margin-bottom:-5px"><b>Mobile Number :</b> <span><?php  echo $row['phnum'];?></span></p>
                            <p style="font-size:20px;margin-bottom:-5px"><b>Address :</b> <span><?php  echo $row['address'];?></span></p>
                            <p style="font-size:20px;margin-bottom:-5px"><b>LandMark :</b> <span><?php  echo $row['landmark'];?></span></p>
                            <p style="font-size:20px;margin-bottom:-5px"><b>Timing :</b> <span><?php  echo $row['timing'];?></span></p>
                            <p style="font-size:20px;margin-bottom:-5px"><b>Type :</b> <span><?php  echo $row['type'];?></span></p>
                            <p style="font-size:20px;margin-bottom:-5px"><b>Reason :</b> <span><?php  echo $row['Reason'];?></span></p>
                            <form action="deletecomplaint.php" method="post">
                            <input type="hidden" name='timesss' value="<?php echo $row['id'] ?>">
                            <p><input type="submit" name="delete-card" value="DELETE" class="btn btn-primary" style="margin-top:5px;background-color: rgb(5, 14, 254) ;color:white;border:1px solid skyblue; box-shadow:0 0 5px skyblue;"></p>
                            </form>
                       </div>
                            <?php
         //   echo $row['username'];
                     }
                }
                else{
                    echo"No Complaints ";
                 }
                 ?>
            
            </div>
        </div>

</body>
</html>