<?php  
$file_path = $_FILES['fileupload']['tmp_name'];
$file_name = $_FILES['fileupload']['name'];
$server_path = "uploads/".$file_name;

if(move_uploaded_file($file_path,$server_path))
{
  echo "successfully uploaded";
}
else{
  echo "upload error";
}

?> 
