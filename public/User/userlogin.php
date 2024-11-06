<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
</head>
<?php include ('includes/db_connect.php');
session_start();
include ('includes/header.php');
include ('includes/maintop.php');

if(!isset($_SESSION['is_login'])){
if(isset($_REQUEST['remail'])){
$remail = $_REQUEST['remail'];
$rpassword =$_REQUEST['rpassword'];
$sql = "SELECT r_email, r_password FROM register WHERE r_email = '".$remail."' AND r_password = '".$rpassword."' limit 1";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $_SESSION['is_login'] = true;
    $_SESSION['remail'] = $remail;
    echo "<script> location.href='userprofile.php';</script>";
    exit;
}else{
    $msg = '<div class="alert alert-warning mt-2">Enter Valid Email and Password</div>';
}
}
}else{
    echo "<script> location.href='userprofile.php';</script>"; 
}
?>

<body>
    <div class="mb-3 mt-5 text-center text-dark" style="font-size:30px; font-weight:bolder;">
    <i class="fas fa-bus"></i>
        <span style="color:black;">Courier Management System</span>
    </div>
    <p class="text-center" style="font-size:20px;"><i class="fas fa-user-secret text-danger">Login Area </i></p>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
             <div class="col-sm-6 col-md-4">
                <form action="" method="post" class="shadow-lg p-4">
                    <div class="form-group">
                        <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
                        <input type="email" name="remail" class="form-control" placeholder="Email" >
                        <small class="form-text">We'll never share your email with anyone.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password</label>
                        <input type="password" name="rpassword" class="form-control" placeholder="Password" >
                    </div>
                    <button type="submit" class="btn btn-outline-danger mt-3 font-weight-bold btn-block shadow-sm">Login</button>
                    <?php if(isset($msg)){echo $msg;} ?>
                </form>
                <div class="text-center mb-5"><a href="index.php" class="btn btn-danger mt-3 font-weight-bold shadow-sm">Back to Home</a></div>
             </div>
        </div>

    </div>
</body>
</html>
<?php
include ('includes/mainfooter.php');

?>