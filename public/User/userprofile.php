<?php 
define ('PAGE', 'userprofile');
include ('includes/db_connect.php');

include ('includes/header.php');
//include ('includes/maintop.php');
session_start();
if($_SESSION['is_login']){
    $remail = $_SESSION['remail'];
}else{
    echo "<script> location.href='userlogin.php'</script>";
}
$sql = "SELECT r_name, r_email FROM register WHERE r_email = '$remail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $rname = $row['r_name'];
}
if(isset($_REQUEST['nameupdate'])){
    if($_REQUEST['rname'] == ""){
        $passmsg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role = "alert">Fill all fields!</div>';
    }else{
        $rname = $_REQUEST['rname'];
        $sql = "UPDATE register SET r_name = '$rname' WHERE r_email = '$remail'";
        if($conn->query($sql)==TRUE){
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
        }else{
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to update</div>';
        }
    }
}
include ('sidebar.php');
?>

    <!-- ************sidebar end**** -->
    <div class="col-sm-6 mt-5"> 
    <form action="" method="POST" class="mx-5">
        <div class="form-group">
            <label for="inputemail">Email</label>
            <input type="email" name="remail" id="remail" class="form-control" readonly value ="<?php echo $remail?>">
        </div>
        <div class="form-group">
            <label for="rname">Name</label>
            <input type="text" name="rname" id="rname"class="form-control" value ="<?php echo $rname?>">
        </div>
        <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
        <?php
        if(isset($passmsg)){echo $passmsg;}
        ?>
    </form>
    </div>
        </div>
    </div>
</body>
</html>
<?php
include ('includes/footer.php');
?>