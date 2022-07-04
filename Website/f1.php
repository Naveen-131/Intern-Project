<?php 
$conn = mysqli_connect("localhost", "root", "","crescent");
if ($conn) { echo "Success"; } 
$sql="create table application(First_Name varchar(40),Last_Name varchar(40), Email varchar(40) PRIMARY KEY,Portfoilo varchar(40),Job_Category varchar(40),Position varchar(40),Salary_Requirement varchar(40),Contact_no  varchar(30),Message varchar(40))";
    if(mysqli_query($conn,$sql)) 
    {
	  echo "Table created Sucessfully"; 
	} 
else 
{ 
echo mysqli_error($conn); 
}
 mysqli_close($conn);
?>