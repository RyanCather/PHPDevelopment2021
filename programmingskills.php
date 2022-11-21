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

<form method="GET">
    <input type="number" name="age">
    <button>SUBMIT</button>
</form>


<!--The majority of the code here in the body tag is to display in the browser/.-->
<?php

// This gets the number value entered into the "age" form field.


$numberInput = $_GET["age"];
echo "The square of ".$numberInput." is ".squareNumber($numberInput)."<br>";
echo "The square root of ".$numberInput." is ".squareRootNumber($numberInput)."<br>";
echo "<br>";

//echo PHP_INT_MAX;
//
//$name = "Ryan Cather";
//$address = "123 Smith Street";
//$phone_number = "0400 123 123";
//$email = "ryan.cather@ed.act.edu.au";
//
//echo "<p>";
//echo $name;
//echo $address;
//echo $phone_number;
//echo $email;
//
//echo "<p>";
//echo $name, $address, "...", $phone_number, $email;
//echo "<p>";
//
//// If the total of the order is $50 or more, then a discount is applied.
//$subtotal = 24.5;           // Subtotal is the raw total from a receipt.
//$discount = 0.1;            // The discount is 10%, written as a float.
//$total = 0;                 // Declared for later use.
//
//if ($subtotal >=50) {
//    $total = $subtotal - ($subtotal*$discount);
//} else {
//    $total = $subtotal;
//}
//echo "$".$total;

/*
 * This function takes a number variable, $numberToSquare, and returns the square of it.
 * There is no error checking to ensure that $numberToSquare is, in fact, a number.
 * @param int $numberToSquare The number that will be squared.
 */
function squareNumber($numberToSquare) {
    return $numberToSquare * $numberToSquare;
}

function squareRootNumber ($numberToSquareRoot) {
    if ($numberToSquareRoot > 0 ) {
        return sqrt($numberToSquareRoot);
    } else {
        return "Illegal Operation";
    }

}

//echo squareNumber(5);
//echo squareNumber(10);



echo "<p>";

//
//$loopCounter = 1;
//while ($loopCounter <= 100) {
//    if ($loopCounter%2 == 0) {
//        echo $loopCounter."<br>";
//    }
//    $loopCounter++;
//}
?>

<script src="js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>
</html>


