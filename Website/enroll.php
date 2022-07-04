<?php 
$conn = mysqli_connect("localhost", "root", "","Crescent");
if ($conn) { echo "Success"; } 
$sql="create table Course_reg(Name varchar(40), Email varchar(40) PRIMARY KEY, Contact_no  varchar(30),Course_type varchar(30), Course_name varchar(30), Branch varchar(20))";
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
