<?php 
$conn = mysqli_connect("localhost", "root", "","Crescent");
if ($conn) { echo "Success"; } 
$sql="create table Enquiry(Name varchar(40), Email varchar(40) PRIMARY KEY, Contact_no  varchar(30),Enquiry_class varchar(30),Enquiry_subject varchar(30), Message varchar(40))";
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
