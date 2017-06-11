<?php
session_start();
include('conn.php');
$iam=$_POST['iam1'];
$name=$_POST['name1'];
$email=$_POST['email1'];
$r_mobile=$_POST['mobile1'];
$temp=$_POST['otp1'];

$m=$_COOKIE['a1'];

$date=date("d/m/Y");


				if($m == $temp)
				{
								if($iam=="owner")
								{		
										$qu="SELECT mobile FROM `registation` where mobile = '$r_mobile'";
										$sql = @mysqli_query($connection,$qu);
										$row=@mysqli_fetch_row($sql);
										$m=$row[0];
										$flag=0;
										if(isset($m))
										{
											// is in db	
											$flag=1;
											echo "<script>alert('set flag')</script>";
										}
										if($flag==0)
										{
											// insert value in db
												
											$qu1="SELECT name FROM `registation` where name = '$name'";
											$sql1 = @mysqli_query($connection,$qu1);
											$roww=@mysqli_fetch_row($sql1);
											$n=$roww[0];
											if(isset($n))
											{
												$ali=rand(10, 99);
												$name=$n.$ali;
											}
											
											$_SESSION['name']=$name;
											$query="INSERT INTO `registation`(`id`, `name`, `email`, `mobile`, `flow_id`, `pd_id`, `date`) VALUES ('','".$name."','".$email."','".$r_mobile."','".$i."','0','".$date."')";
										
											$upload=  mysqli_query($connection,$query);
											$_SESSION['ii']=1;		

											echo "<script>alert('INSERT query')</script>";
											
										}	
										if($flag==1)
										{
											$_SESSION['ii']=1;	
											$_SESSION['name']=$name;
											
											echo "<script>alert('not INSERT query')</script>";
											
										}
		
								}
				}
				else
				{
					echo "<script>swal('Oops...', 'Enter Correct OTP!', 'error');</script>";
					echo "
					<script type='text/javascript'> 
						$(function() {                     
						  $('#myModal2').modal('show');   
						}); 
					  </script>   
				";
				}

?>