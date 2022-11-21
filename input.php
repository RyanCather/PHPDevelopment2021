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

<h1>Contact Us</h1>
<h3>Please enter your details</h3>
<form action="input.php" method="post"
">
What's your name?
<input type="text" name="name">
<br>
What's on your mind?
<input type="text" name="response">
<input type="submit" name="formSubmit" value="Submit">
</form>

<!--The majority of the code here in the body tag is to display in the browser/.-->
<?php
require_once 'conn.php';
//Checks whether the variable is set
if (isset($_POST['formSubmit'])) {
    $errorMsg = "";
//Sets the submission boxes as variables for more concise reading
    $varName = sanitise_data($_POST['name']);
    $varResponse = sanitise_data($_POST['response']);
    if (!empty($errorMsg)) {
//Output the error/s
        echo("<p>There was an error:</p>");
        echo("<ul>" . $errorMsg . "</ul>");
    } else {
        $query = "CREATE TABLE IF NOT EXISTS `opinion`(opinion_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name1 TEXT, re TEXT)";
        $conn->exec($query);
        $conn->exec("INSERT INTO `opinion` (name1, re) VALUES('$varName', '$varResponse')");
    }
}
//The code below sanitises the code to prevent XSS attacks


function sanitise_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<script src="js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>
</html>