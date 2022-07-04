<?php
$email=$_POST['t1'];
$pass=$_POST['t2'];
$conn=mysqli_connect('localhost','root','','crescent');
$query="Select Password from registration where Email='{$email}'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$p = $row['Password'];
if($p==""||$pass==""||$email="")
{
echo "Login Failed..Please Try again by registering";
}
else if($p==$pass)
{
echo "<h3>Login Sucessfull..!!</h3>";
session_start();
$_SESSION['username']=$email;
header("refresh:2,url=home.html");
}
else
{
echo "<h3>Login Failed</h3>";
}

?>

