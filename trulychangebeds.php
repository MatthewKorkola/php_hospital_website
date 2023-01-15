<?php
// This file changes the number of beds at a previously determined hospital.
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Change Number of Beds</title>
<link rel="stylesheet" type="text/css" href="hospital.css">
<link href="https://fonts.googleapis.com/css?family=Mali"
rel="stylesheet">
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Change Number of Beds:</h1>
<ol>
<?php
   $hosCode = $_POST["hoscode"];
   $numOfBed = $_POST["numofbed"];

    // To work properly, this query requires the previously determined values of hospital code and number of beds.
    $query = "UPDATE hospital SET numofbed = '$numOfBed' WHERE hoscode = '$hosCode'";
    if (!mysqli_query($connection, $query)) {
         die("Error: insert failed" . mysqli_error($connection));
    }
    echo "The number of beds was changed.";

    mysqli_close($connection);


?>
</ol>
</body>
</html>
