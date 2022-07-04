<?php
$firstname=$_POST['First_Name'];
$lastname=$_POST['Last_Name'];
$email=$_POST['Email'];
$portfolio=$_POST['Portfolio'];
$job_category=$_POST['search_categories'];
$position=$_POST['Position'];
$salary_requirement=$_POST['Salary'];
$phn=$_POST['Phone'];
$msg=$_POST['Reference'];

$conn=mysqli_connect('localhost','root','','crescent');
$query="insert into application values('{$firstname}','{$lastname}','{$email}','{$portfolio}','{$job_category}','{$position}','{$salary_requirement}','{$phn}','{$msg}')";
 if (mysqli_query($conn,$query))
 {
	echo "<center><br><br><br><h1>Thank you..!! We will contact you soon</h1><br><h1>Send your Resume to this Mail ID: crescentonline@gmail.com or info@crescenttechnosoft.com<h1><br>";
  
 }
 else 
 
	 echo "Failed";
?>