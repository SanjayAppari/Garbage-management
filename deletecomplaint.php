<?php
 require("config.php");
 if(isset($_POST['delete-card']))
 {
    $id=$_POST['timesss'];
    // echo $date;
    $query = "DELETE FROM `raise-complaint` WHERE id='$id'";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        header("location:user-profile.php");
    }
    else{
        echo '<script>alert("data not deleted");</script>';
    }
 }
?>