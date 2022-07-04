<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phn=$_POST['contact'];
$regard=$_POST['cate'];
$option=$_POST['category'];
$msg=$_POST['msg'];

if($name=="" || $email=="" || $phn=="" ||$regard=="" ||$option=="" ||$msg=="")
{
	echo "Fill All the details";
}
else
{
	$conn=mysqli_connect('localhost','root','','crescent');
    $query="insert into Enquiry values('{$name}','{$email}', {$phn},'{$regard}','{$option}','{$msg}')";
    if (mysqli_query($conn,$query))
	    echo "Thank you..!, We will contact you soon";
    else 
	     echo "Failed";
}
?>