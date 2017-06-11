<?php
$a=$_POST['months'];
$b=$_POST['rent'];
if (isset($_POST['months']) ) {
   // echo $_POST['val1'] + $_POST['val2'];
    //exit();
	echo "<script>alert('$a,$b')</script>";
	
} else {
    echo 0;
	echo "<script>alert('is in else $a,$b')</script>";
    exit();
}
?>