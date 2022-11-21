<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>


<h1>Login</h1>
<?php include "login.php" ?>

<form action="index.php" method="post">
    <p>
        Username
        <input type="text" name="usrUsername" class="form-control" required="required">
    </p>
    <p>
        Password
        <input type="text" name="usrPassword" class="form-control" required="required">
    </p>

    <input type="submit" name="login" value="Submit">
</form>


</body>
</html>

