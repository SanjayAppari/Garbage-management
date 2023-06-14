<?php
 require("config.php");
 if(isset($_POST['task-done']))
 {
    $id=$_POST['timesss'];
    // echo $date;
    $query = "DELETE FROM `assigned-complaint` WHERE id='$id'";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        echo '<script>alert("data  deleted");</script>';
        header("location:driver-page.php");
    }
    else{
        echo '<script>alert("data not deleted");</script>';
    }
 }
?>