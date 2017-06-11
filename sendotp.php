<?php
						
							
							
								$mobile=$_GET['mobile'];
								$otp=rand(0000, 9999);
								
								$result=header("Location: http://trans.softhubtechno.com/api/sendmsg.php?user=fairowner&pass=12345&sender=Fowner&phone=$mobile&text=Your OTP for RoomsOnRent.in is:$otp Only Website having 100% brokerage free verified properties&priority=ndnd&stype=normal");
								$chk=substr($result,"S",1);
								//$url="http://trans.softhubtechno.com/api/sendmsg.php?user=fairowner&pass=12345&sender=Fowner&phone=$mobile&text=Your OTP for fairowner.com is:$otp Only Website having 100% brokerage free verified properties&priority=ndnd&stype=normal";
								if($chk=="S")
								{
									echo "<script>window.location.href='login.php'</script>";
								}
								else
								{
									echo "<script>window.location.href='login.php'</script>";
								}
						
						?>