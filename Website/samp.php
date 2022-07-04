<?php
 if (isset($_POST['upload']))
 {
    $file_name =  $_FILES['file']['name'];
    $file_stype = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tem_loc = $_FILES['file']['tmp_name'];
    $file_store = "upload/".$file_name;
   if (move_uploaded_file($file_tem_loc,$file_store))
   {
    echo "File Uploaded Sucessfully..!!";
   }
   else
   {
    echo "File Upload Failed..!!";
   }
 }
?>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <form action="?" method="post" enctype="multipart/form-data">
        <label>Uploading Files</label>
        <p><input type="file" name="file"/></p>
        <p><input type="submit" name="upload" value="upload"></p>
</body>