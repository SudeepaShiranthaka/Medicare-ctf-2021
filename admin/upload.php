<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/upload.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
    <form action="uploadBackend.php" method="post" enctype="multipart/form">
        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <div class="file-upload">
            <button class="btn btn-outline-success file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">
            <b>Browse on your Computer</b></button>

            <div class="image-upload-wrap">
                <input class="file-upload-input" name="my_file" type='file' onchange="readURL(this);" accept="image/*" />
                <div class="drag-text">
                    <h3>Drag and drop your Configuration file</h3>
                </div>
            </div>
            <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="Your Configuration File" />
                <div class="image-title-wrap">
                    <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                </div>
            </div><br>
            <input type="submit" name="submit" class="btn btn-outline-primary " value="Upload"/>
        </div>
    </form>
    <script src="./js/upload.js"></script>
</body>
</html>