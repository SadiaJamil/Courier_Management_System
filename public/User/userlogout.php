<?php
define ('PAGE', 'userlogout');
session_start();
session_destroy();
header("Location:index.php");
exit();
// echo "<script>location.href='index.php';"
?>