<?php 
$name=$_POST['t1'];
$email=$_POST['t2'];
$pass=$_POST['t3'];
$conn=mysqli_connect('localhost','root','','crescent');
$query="insert into registration values('{$name}','{$email}','{$pass}')";
if (mysqli_query($conn,$query))
{
	if ($name!=""||$email!=""||$pass!="")
	{
	echo "<h2>Account Registered Sucessfully!</h2>";
    header("refresh:2,url=Signin.html");
    }
    else
    {
    	echo "<h2>Please Fill all the details</h2>";
    }
}
else 
	echo "<h2>Account Registration Failed</h2>";
?>
