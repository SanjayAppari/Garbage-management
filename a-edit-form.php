<?php
    require("config.php");
    session_start();

if(isset($_POST['edit-form'])){
    $username=$_POST['username'];
    $fname=$_POST['fullname'];
    $email=$_POST['email'];
    $phnum=$_POST['phnum'];
    $files=$_FILES['file'];
    
    $id= $_SESSION['Id'];
    $filename=$files['name'];
// echo"<script>alert('$filename');</script>";
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
echo($username);
    $fileext= explode('.',$filename);
    $filecheck= strtolower(end($fileext));
    
    $fileextstored= array('png' , 'jpg' ,'jpeg');
    
    if(in_array($filecheck,$fileextstored))
    {
        $destinationfile= 'images/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
        $q = "UPDATE `register-admin` SET fname='$fname',
        username='$username',email='$email',phnum='$phnum',image='$destinationfile'
         WHERE id= '$id'";
        $query = mysqli_query($con,$q);
    }
    else{
        $q = "UPDATE `register-admin` SET fname='$fname',
        username='$username',email='$email',phnum='$phnum'
         WHERE id= '$id'";
        $query = mysqli_query($con,$q);
    }
    
    header("location:login-admin.php");
}

?>