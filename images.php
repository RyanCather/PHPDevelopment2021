<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- You can change the title to reflect the page contents.-->
    <title>Image Upload Using PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>


<!-- The code below displays submission boxes for the users -->
<h2>Upload Image</h2>
<form action="images.php"
      method="post"
      enctype="multipart/form-data">

    <input type="file"
           name="file">

    <button type="submit"
            name="submit"
            value="Upload"> Upload</button>

</form>
<body>

<?php

include "conn.php";

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    //Variable Names
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    //defining what type of file is allowed
    // We seperate the file, and obtain the end.
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    //We ensure the end is allowable in our thing.
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0 ) {
            //File is smaller than yadda.
            if ($fileSize < 10000000000){
                //file name is now a unique ID based on time with IMG- precedding it, followed by the file type.
                $fileNameNew = uniqid('IMG-',True).".".$fileActualExt;
                //upload location
                $fileDestination = 'uploads/'.$fileNameNew;
                //command to upload.
                move_uploaded_file($fileTmpName, $fileDestination);
                // Insert into Database
                $query="CREATE TABLE IF NOT EXISTS `images`(opinion_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, img1 TEXT)";
                $conn->exec($query);
                $conn->exec("INSERT INTO `images` (img1) VALUES('$fileNameNew')");
                echo "<h2> file UPloaded </h2>";
            } else {
                echo "Your File is too big!"; }
        } else {
            echo "there was an error uploading your file!";}
    } else {
        echo "You cannot upload files of this type!";
    }


}

?>

<script src="js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"crossorigin="anonymous"></script>

</body>
</html>
