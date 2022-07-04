<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phn=$_POST['contact'];
$msg=$_POST['message'];

if($name=="" || $email=="" || $phn=="" ||$msg=="")
{
	echo "Fill All the details";
	header("refresh:2,url=contact1.html");

}
else
{
	$conn=mysqli_connect('localhost','root','','crescent');
    $query="insert into contact values('{$name}','{$email}', {$phn},'{$msg}')";
    if (mysqli_query($conn,$query))
    {
	    echo "Thank you..!, We will contact you soon";
	    header("refresh:2,url=home.html");
	}
    else 
    {
	     echo "Failed, Please check the entered details";
	     header("refresh:2,url=contact1.html");
    }
}
?>