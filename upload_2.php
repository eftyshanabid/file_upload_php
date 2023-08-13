<?php

$file_path = $_FILES['fileupload']['tmp_name'];
$file_name = $_FILES['fileupload']['name'];

$file_size = $_FILES['fileupload']['size'];
$file_type = $_FILES['fileupload']['type'];

$server_path = "uploads/".$file_name;


if($file_size <= 300*1024)
{
    if($file_type == "image/jpeg")
    {
        if(move_uploaded_file($file_path,$server_path))
        {
          echo "successfully uploaded";
        }
        else{
          echo "upload error";
        }
    }
    else{
        echo "error! supported file extension is .jpg only";
    }
}
else{
    echo "error! supported file size is 300kb or less";
}





?>
