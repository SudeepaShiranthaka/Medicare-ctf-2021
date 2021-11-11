<?php
if($_FILES["upload_file"]["error"])
{
    echo "File Could not be Uploaded";
}
else
{
    move_uploaded_file($_FILES["upload_file"]["tmp_name"],"uploads/".$_FILES["upload_file"]["name"]);
    echo "File Uploaded";

    header("refresh:2; url=index.html");
}

?>