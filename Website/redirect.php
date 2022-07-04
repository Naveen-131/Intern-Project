<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:home.html");
}
else
echo "<h1>Please Sign in or Register</h2>";
header("refresh:1,url=Signin.html");
?>