<?php
 require("config.php");
 if(isset($_POST['assign-driver']))
 {
    $id=$_POST['timesss'];
    $drivername = $_POST['driver'];
    $q2="SELECT * FROM `raise-complaint` WHERE id='$id'";
    $q2_run=mysqli_query($con,$q2);
    $row=mysqli_fetch_array($q2_run);
    $username=$row['username'];
    $name=$row['name'];
    $phnum=$row['phnum'];
    $address=$row['address'];
    $landmark=$row['landmark'];
    $image=$row['image'];
    $timing=$row['timing'];
    $type=$row['type'];
    $Reason=$row['Reason'];
    $q1="insert into `assigned-complaint` (drivername,name,username,phnum,address,landmark,image,timing,type,Reason) values ('$drivername','$name','$username','$phnum','$address','$landmark','$image','$timing','$type','$Reason')";
    if(mysqli_query($con,$q1)){
        $query = "DELETE FROM `raise-complaint` WHERE id='$id'";
        $query_run = mysqli_query($con,$query);
        if($query_run){
            $page = $_SERVER['PHP_SELF'];
            $sec = "10";
            // header("Refresh: $sec; url=$page");
            header("location:admin-page.php");
        }
        else{
            echo"<script>alert('Not successfully');</script>";
        }
    }
    else{
        echo"<script>alert('Not successfully');</script>";
    }
 }
?>