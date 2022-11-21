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

<?php
if ($_POST['formSubmit'] == "Submit") {
    $errorMsg = "";

    if (empty($_POST['usersname'])) {
        $errorMsg .= "<li>You didn't enter your name!</li>";
    }
    if (empty($_POST['starwarsCharacter'])) {
        $errorMsg .= "<li>You didn't enter your favourite character!</li>";
    }
    $varUsersName = $_POST['usersname'];
    $varCharacter = $_POST['starwarsCharacter'];

    if (!empty($errorMsg)) {
        // Output the error/s
        echo("<p>There was an error:</p>");
        echo("<ul>" . $errorMsg . "</ul>");
    } else {
        // Open the connection to the file in "a"ppend mode.
        $csvFile = fopen("userData.csv", "a");
        // Write the string to the end of the file.
        fwrite($csvFile, $varUsersName.",".$varCharacter."\n");
        // Close the connection to the file.
        fclose($csvFile);
    }
}
?>
<div class="container">
    &nbsp


    <form action="starwarsInput.php" method="post">
        <p>
            Enter your name
            <input type="text" name="usersname" value=" $varUsersName; ?>">
        </p>
        <p>
            What is your favourite Star Wars Character?
            <input type="text" name="starwarsCharacter" value="<?= $varCharacter; ?>">
        </p>

        <input type="submit" name="formSubmit" value="Submit">
    </form>


</div>
<!--The majority of the code here in the body tag is to display in the browser/.-->


<script src="js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>
</html>


