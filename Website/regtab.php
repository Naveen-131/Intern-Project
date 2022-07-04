<?php 
$conn = mysqli_connect("localhost", "root", "","Crescent");
 if ($conn) { echo "Success"; } 
 $sql="create table Registration(Name varchar(40), Email varchar(40) PRIMARY KEY, Password varchar(30))";
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
