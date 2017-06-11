<?php
$request1="http://trans.softhubtechno.com/api/sendmsg.php?user=fairowner&pass=12345&sender=Fowner&phone=9921939289&text=Only Website having 100 percent brokerage free verified properties&priority=ndnd&stype=normal";
$response1  = file_get_contents($request1);
if(isset($response1))
{
}
else
{
	echo "<script>alert(''Message API error)</script>";
}
?>