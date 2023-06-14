<?php
if(isset($_POST['logout']))
{
   session_destroy();
   header('location:index.php');
}
?>

<nav class="navbar fixed-top navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Garbage Management</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          
          <form action="user-navbar.php" method="POST">
            <li class="nav-item">
                <button class="nav-link"  type="submit" name="logout" style="color: black;">LogOut <i class="fa-solid fa-right-from-bracket"></i></button>
            </li>
          </form>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
                <img src="images/User-icon.png" alt="" height="24" width="24">
            </a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>