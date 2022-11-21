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

<form method="POST" action="phpintroduction.php">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="E-Mail">
    <input type="number" name="age" placeholder="Age">
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="submit" name="submit" value="Submit">
</form>
<?php

echo $_SERVER["PHP_SELF"];

//$a = 5;
//$b = 6;
//
//echo $a * $b;
//echo "<p>";
$starwarsipsum = "Lucas ipsum dolor sit amet antilles dagobah darth bespin obi-wan antilles hutt lando bothan fett. Tatooine yavin ackbar qui-gonn jango darth. Solo yoda luke sith palpatine. Ben antilles darth solo jinn ackbar boba. Owen jinn watto dagobah sebulba padmé. Qui-gonn mara jango sebulba. Wedge yoda qui-gonn dooku naboo endor mace. Tusken raider sidious darth biggs. Luke thrawn sidious hutt. Leia ackbar droid c-3p0 kessel mandalore mara c-3po alderaan. Ewok secura calamari chewbacca ventress biggs antilles. ";

echo "<p>";
echo "Number of characters in star wars ipsum<br>";
echo strlen($starwarsipsum);
echo "<br>Number of words in star wars ipsum<br>";
echo str_word_count($starwarsipsum);
echo "</p>";

$radius = 5;
$area = pi() * $radius * $radius;
echo "The area is ", $area;


$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);


?>
<script src="js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>
</html>


