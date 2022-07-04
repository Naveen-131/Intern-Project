<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phn=$_POST['contact'];
$course=$_POST['cate'];
$cname=$_POST['category'];
$branch=$_POST['branch'];


if($name=="" || $email=="" || $phn=="" ||$course=="" ||$cname=="" ||$branch=="")
{
	echo "Fill All the details";
}
else
{
	$conn=mysqli_connect('localhost','root','','crescent');
    $query="insert into course_reg values('{$name}','{$email}', {$phn},'{$course}','{$cname}','{$branch}')";
    if (mysqli_query($conn,$query))
	    echo "Thank you for the registration..!!, Please pay the fees before class commences.";
    else 
	     echo "Course Registration Failed";
}
?>