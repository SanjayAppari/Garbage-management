<?php
 require("config.php");
 session_start();
   if(isset($_POST['rcsubmit'])){
    // header("location: user-profile.php");
      $fname=$_POST['fname'];
      $phnum=$_POST['phnum'];
      $address=$_POST['address'];
      $landmark=$_POST['landmark'];
      $timing=$_POST['timing'];
      $type=$_POST['typeofgb'];
      $reason=$_POST['reason'];
      $files=$_FILES['file'];
      $username=$_SESSION['UserId'];
    //   header("location: /index.php");
//     $id= $_SESSION['Id'];
    $filename=$files['name'];
// echo"<script>alert('$files jii');</script>";
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
    $fileext= explode('.',$filename);
    $filecheck= strtolower(end($fileext));
    
    $file extstored= array('png' , 'jpg' ,'jpeg');
    
    
    // if(in_array($filecheck,$fileextstored))
    // {                   
        // echo"<script>alert('$files');</script>";
        $destinationfile = 'complaint-images/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
        $query= 
"insert into `raise-complaint` (username,name,phnum,address,landmark,image,timing,type,Reason) values ('$username','$fname','$phnum','$address','$landmark','$destinationfile','$timing','$type','$reason')";
                if(mysqli_query($con,$query)){
                    header('location:user-page.php');
                    echo"<script>alert('Registered kkkk successfully');</script>";
                }
                else{
                    echo"<script>alert('Complaint not successfully Uploaded');</script>";
                }
//     // }
    // else{
    //     echo"<ssscript>alert('Image Format invalid');</script>";
    // }
   }
?>