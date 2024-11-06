<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
</body>
</html>
<?php include ('includes/db_connect.php');
include ('includes/header.php');
include ('includes/maintop.php');
if(isset($_REQUEST['rsignup'])){
    if(($_REQUEST['rname']== "") || ($_REQUEST['remail']== "") || ($_REQUEST['rpassword']=="")){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert">All fields are required</div>';
    }else {

        $sql = "SELECT r_email FROM register WHERE r_email = '".$_REQUEST['remail']."'";
        $result = $conn->query($sql);
        if($result->num_rows==1){
            $regmsg = '<div class="alert alert-warning mt-2" role="alert">Email ID already registered!</div>';
        }else{
$rname = $_REQUEST['rname'];
$remail= $_REQUEST['remail'];
$rpassword= $_REQUEST['rpassword'];
$sql = "INSERT INTO register(r_name,r_email,r_password) VALUES('$rname' , '$remail', '$rpassword')";
if($conn->query($sql)==TRUE){
    $regmsg = '<div class="alert alert-success mt-2" role="alert">Registered Successfully</div>';
} else {
    $regmsg = '<div class="alert alert-success mt-2" role="alert">Something went wrong</div>';
}
    }
}
}

?>
<div class="container pt-5" id="register">
    <h2 class="text-center">Create an account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="name" class="font-weight-bold pl-2">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="rname">
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="email" class="font-weight-bold pl-2">Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="remail">
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="pass" class="font-weight-bold pl-2">New Password</label>
                    <input type="text"  class="form-control" placeholder="Password" name="rpassword">
                </div>
                <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rsignup">Sign Up</button>
                <em style="font-size:10px;">Note - By Clicing Sign Up, you agree to our terms, data policy and Cookie Policy</em>
                <div class="text-center mb-5"><a href="index.php" class="btn btn-danger mt-3 font-weight-bold shadow-sm">Back to Home</a></div>
                <?php if(isset($regmsg)) {echo $regmsg;}?>

            </form>
        </div>
    </div>
</div>
<?php
include ('includes/mainfooter.php');
?>