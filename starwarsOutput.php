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
<div class="container">
    <?php
    $currentRow = 1;
    if (($handle = fopen("userData.csv", "r")) !== FALSE) {
        echo "<table border='1'>"; // Starts the Table
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $numberOfRowsOfData = count($data);
            $currentRow++; //Add one to the current row
            echo "<tr>";  // starts a new table row

            // Loops through the data in each row (separated by a comma) and makes a table cell
            for ($column = 0; $column < $numberOfRowsOfData; $column++) {
                echo "<td>" . $data[$column] . "</td>"; // Creates a cell within a row, for each piece of data
            }
            echo "</tr>";   // Ends the table row
        }
        echo "</table>";    // Ends the table
        fclose($handle);    // Closes the File
    }
    ?>
</div>

<!--The majority of the code here in the body tag is to display in the browser/.-->


<script src="js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>
</html>


