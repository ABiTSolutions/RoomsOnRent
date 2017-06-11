<?php
session_start();
unset($_SESSION['subadminname']);
echo "<script>window.location.href='login.php'</script>";

?>