<?php
include ('includes/header.php');
include ('includes/maintop.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order</title>
    
</head>
<body>
    <!-- ******************Nav************************ -->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/gallery/Swiftship courier service.png" height="100" width="100" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="index.php">Our Services</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="index.php">Find Us</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="register.php">Register</a></li>
            </ul>
            <div class="dropdown d-none d-lg-block">
              <!-- <button class="btn bg-soft-warning ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-warning"></i></button> -->
              <div class="dropdown-menu dropdown-menu-lg-end p-0 rounded" aria-labelledby="dropdownMenuButton1" style="top:55px">
                <form>
                  <input class="form-control border-200" type="search" placeholder="Search" aria-label="Search" style="background:#FDF1DF;" />
                </form>
              </div>
            </div><a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="index.php">Contact Us</a>
          </div><a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="userlogin.php">Login</a>
            <!-- <form class="d-flex my-3 d-block d-lg-none">
              <input class="form-control me-2 border-200 bg-light" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>
   <!-- **********Start container******** -->
    <div class="container-fluid" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5"> <!-- ***********sidebar -->
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a style="color:#F95C19;" href="userprofile.php" class="nav-link <?php if(PAGE == 'userprofile'){echo 'active';}?>"><i class="fas fa-user"></i>Profile</a></li>
                        <li class="nav-item"><a style="color:#F95C19;" href="trackorder.php" class="nav-link <?php if(PAGE == 'trackorder'){echo 'active';}?>"><i class="fab fa-accessible-icon"></i>Track Order</a></li>
                       
                        <li class="nav-item"><a style="color:#F95C19;" href="userchangepass.php" class="nav-link <?php if(PAGE == 'userchangepass'){echo 'active';}?>"><i class="fas fa-key"></i>Change Password</a></li>
                        <li class="nav-item"><a style="color:#F95C19;" href="userlogout.php" class="nav-link <?php if(PAGE == 'logout'){echo 'active';}?>"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
    </nav>
    <!-- *************parcel details ******* -->
   













    </body>
</html>