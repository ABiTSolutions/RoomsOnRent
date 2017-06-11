<?php
session_start();
unset($_SESSION['superadminname']);
echo "<script>window.location.href='admin_login.php'</script>";

?>