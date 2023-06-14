<?php
    require("config.php");
    session_start();

if(isset($_POST['feedback-submit'])){
    $rating=$_POST['rating'];
    $contact=$_POST['contact'];
    $feedback=$_POST['feedback'];
    $filename= $_SESSION['Image'];
    $destinationfile= $filename;
    $name=$_SESSION['UserId'];
        // move_uploaded_file($filetmp,$destinationfile);
        $query= "insert into `feedback` (name,image,rating,feedback,contact) values ('$name','$destinationfile','$rating','$feedback','$contact')";
        if(mysqli_query($con,$query)){
            echo"<script>alert('Registered successfully');</script>";
            header("location:user-page.php");
        }
        else{
            echo"<script>alert('Form  not submitteds successfully');</script>";
        }
        
}

?>