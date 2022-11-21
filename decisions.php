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
$subtotal = 24.5;       // Subtotal of the bill
$discount = 0.1;        // discount is applied if subtotal is over $50
$total = 0;

if ($subtotal >= 50) {
    $total = $subtotal - ($subtotal*$discount);
} else {
    $total=$subtotal;
}

echo "Total = $".$total;

?>

<script src="js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>
</html>


