<!DOCTYPE html>
<?php
    require("config.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garbage Management System</title>
    <!-- google fonts link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/d1eb574a3d.js" crossorigin="anonymous"></script>
    <!-- my css file -->
     
    <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body style="background-color: skyblue;">
<!-- navbar starting -->
    <div id="navbar-div" >

    </div>
    <script>
        $(function(){
            $("#navbar-div").load("navbar.php");
        })
    </script>
<!-- navbar ending -->

<!-- home page starting -->
    <div id="home">
            <!-- <img src="home-banner.jpg" alt="" >     -->

    </div>
<!-- home page ending -->

<!-- about section starting  -->
    <div id="about">
        <div class="heading">
            <h1>About Us</h1>
        </div>
        <div class="about-main">
            <div class="about-content">
                <div class="image">
                    <img src="images/about-img.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Garbage Management System</h3>
                    <center><p>Lorem ipsum dolor sit amet consectetur adipisici Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni, doloremque.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat dolorum fuga dignissimos? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo totam neque voluptate
                         voluptates rem non et natus ex nam ea? Nisi molestias, eaque culpa voluptates odit eos nostrum cumque dolorum repellat ad pariatur laborum? Quos distinctio inventore eos non 
                         repudiandae quisquam fugit minus atque explicabo cupiditate tempora rerum hic provident, odio ullam quod dicta impedit officia id aperiam debitis natus voluptate ipsum. Dolor
                          dolore autem velit eum fugiat corporis quas alias asperiores exercitationem vero, quisquam deserunt sunt aperiam numquam animi repellendus, excepturi possimus reiciendis sit amet
                           veniam mollitia sequi incidunt voluptatibus? Perspiciatis cumque necessitatibus minus ratione labore est architecto ipsa?</p></center>
                    <a href="ContactFrom_v1/index.php"><button class="btn btn-primary" style="background-color:  rgb(5, 14, 254);  ">
                        Contact Us
                    </button></a>
                </div>
            </div>
        </div>
    </div>
<!-- about section ending  -->

<!-- reviews section starting 1 -->

    <div id="reviews">
        <div class="heading" style="padding-top:30px">
            <h1>Reviews</h1>
        </div>
        <div class="reviews-card">
            <?php
                require("config.php");
                
                $query="SELECT * FROM `feedback`    ";
                $query_run = mysqli_query($con,$query);
                $check = mysqli_num_rows($query_run) > 0;
                if($check)
                {

                while($row = mysqli_fetch_array($query_run))
                {
                  ?>
                    <div class="r-card">
                        
                        <div class="img">
                            <img src="<?php  echo $row['image'];?>" alt="">
                        </div>
                        <div style="position:relative;width:100%;display:flex;align-items:center;justify-content:center">
                          <p style="font-size:20px" ><?php  echo $row['name'];?></p>
                        </div>
                        <!-- <br> -->
  
                <!-- </br> -->
                    
                        <?php
                            if($row['rating']==1){
                        ?>
                                <span style="box-shadow:0 0 10px balck">
                                <i class="fa-solid fa-star" style="text-shadow:0 0 10px black;color:yellow"></i>
                                <i class="fa-solid fa-star" style="text-shadow:0 0 10px black;"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black;"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black;"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black;"></i>
                                </span>
                        <?php
                            }
                        ?>
                        <?php
                            if($row['rating']==2){
                        ?>
                                <span style="box-shadow:0 0 10px balck">
                                <i class="fa-solid fa-star" style="text-shadow:0 0 10px black;color:yellow"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black;color:yellow"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black;"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black;"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black;"></i>
                                </span>
                        <?php
                            }
                        ?>
                        <?php
                            if($row['rating']==3){
                        ?>
                                <span style="box-shadow:0 0 10px balck">
                                <i class="fa-solid fa-star" style="text-shadow:0 0 10px black;color:yellow"></i>
                                <i class="fa-solid fa-star" style="text-shadow:0 0 10px black;color:yellow"></i>
                                <i class="fa-solid fa-star" style="text-shadow:0 0 10px black;color:yellow"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black;"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black;"></i>
                                </span>
                        <?php
                            }
                        ?>
                        <?php
                            if($row['rating']==4){
                        ?>
                                <span style="box-shadow:0 0 10px balck">
                                <i class="fa-solid fa-star" style="text-shadow:0 0 10px black; color:yellow"></i>
                                <i class="fa-solid fa-star" style="text-shadow:0 0 10px black;color:yellow"></i>
                                <i class="fa-solid fa-star" style="text-shadow:0 0 10px black;color:yellow"></i>
                                <i class="fa-solid fa-star" style="text-shadow:0 0 10px black;color:yellow"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black;"></i>
                                </span>
                        <?php
                            }
                        ?>
                        <?php
                            if($row['rating']==5){
                        ?>
                                <span style="box-shadow:0 0 10px balck">
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black;color:yellow"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black;color:yellow"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black; color:yellow"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black; color:yellow"></i>
                                <i class="fa-solid fa-star"style="text-shadow:0 0 10px black; color:yellow"></i>
                                </span>
                        <?php
                            }
                        ?>
                        <center><p>
                        <?php  echo $row['feedback'];?>
                        </p></center>
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


<!-- reviews section ending  -->


</body>
</html>