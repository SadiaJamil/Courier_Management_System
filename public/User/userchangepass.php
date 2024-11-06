<?php 
define ('PAGE', 'userchangepass');
include ('includes/db_connect.php');
session_start();
include ('includes/header.php');
include ('sidebar.php');
if($_SESSION['is_login']){
    $remail = $_SESSION['remail'];
}else{
    echo "<script> location.href='userlogin.php'</script>";
}
$sql = "SELECT r_password, r_email FROM register WHERE r_email = '$remail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $rpass = $row['r_password'];
}
if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['rpassword'] == ""){
        $passmsg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role = "alert">Fill all fields!</div>';
    }else{
        $rpass = $_REQUEST['rpassword'];
        $sql = "UPDATE register SET r_password = '$rpass' WHERE r_email = '$remail'";
        if($conn->query($sql)==TRUE){
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
        }else{
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update</div>';
        }
    }
}
?>
<div class="col-sm-6 mt-5">
<form action="" method="POST">
<div class="form-group">
    <label for="inputemail">Email</label>
    <input type="email" id="inputemail" class="form-control" value="<?php echo $remail;?>" readonly>
</div>
<div class="form-group">
    <label for="inputnewpass">New Password</label>
    <input type="password" id="inputnewpass" class="form-control" placeholder="new password" name="rpassword">
</div>
<button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
<!-- <button type="reset" class="btn btn-secondary mt-4">Reset</button> -->
<?php
if(isset($passmsg)){echo $passmsg;}
?>
</form>
</div>


