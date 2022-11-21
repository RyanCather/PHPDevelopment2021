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
//Variable definitions to clear errors in the form.
$varUsersName = "";
$varEmail = "";
$varAddress = "";
$varWebURL = "";
?>
<h1>Order Form</h1>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <p>Enter your name:<input type="text" name="usersname" value="<?= $varUsersName; ?>"></p>
    <p>Enter your email<input type="text" name="useremail" value="<?= $varEmail; ?>"></p>
    <p>Enter your address<input type="text" name="useraddress" value="<?= $varAddress; ?>"></p>
    <p>Enter your website URL<input type="text" name="userweb" value="<?= $varWebURL; ?>"></p>
    <h2>Shipping</h2>
    <p><input type="radio" name="shipping" value="female">Standard</p>
    <p><input type="radio" name="shipping" value="male">Express</p>
    <p><input type="radio" name="shipping" value="other">Registered</p>
    <p><input type="submit" name="formSubmitOrder" value="Submit"></p>
</form>

<!--The majority of the code here in the body tag is to display in the browser/.-->
<?php
//PHP Code goes here.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $varUsersName   = sanitise_data($_POST['usersname']);
    $varEmail       = sanitise_data($_POST['useremail']);
    $varAddress     = sanitise_data($_POST['useraddress']);
    $varWebURL      = sanitise_data($_POST['userweb']);
    echo "<p>" . $varUsersName . "</p>";
    echo "<p>" . $varEmail . "</p>";
    echo "<p>" . $varAddress . "</p>";
    echo "<p>" . $varWebURL . "</p>";
}

function sanitise_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>



</body>
</html>


