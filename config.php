<?php
// session_start();
$con=mysqli_connect('localhost','root','','awt-project');
if(!$con){
    echo"<script>alert('Not connected');</script>";
}
?>