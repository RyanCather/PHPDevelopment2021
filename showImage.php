<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- You can change the title to reflect the page contents.-->
    <title>Hello, world!</title>
</head>
<body>
<!--The majority of the code here in the body tag is to display in the browser/.-->
<?php
require_once 'conn.php';
//PHP Code goes here.
$query = $conn->query("SELECT img1 FROM 'images' where opinion_id=3");
$row = $query->fetchArray();
$image= $row[0];
//while ($row = $query->fetchArray()) {
//    echo "<p>";
//    var_dump($row);
//    echo "</p>";
//}

?>
<img src="uploads\<?php echo $row[0]; ?>">
<script src="js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>
</html>