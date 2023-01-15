<?php
// This file uses a table and a while loop to display all relevant podiatrist information via a query.
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hospitals - Podiatrists</title>
<link rel="stylesheet" type="text/css" href="hospital.css">
<link href="https://fonts.googleapis.com/css?family=Mali"
rel="stylesheet">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Podiatrist Information:</h1>
<ol>

<table>
<tr>
    <td>licensenum</td>
    <td>firstname</td>
    <td>lastname</td>
    <td>licensedate</td>
    <td>birthdate</td>
    <td>hosworksat</td>
    <td>speciality</td>
</tr>


<?php
$query = "SELECT * FROM doctor WHERE speciality = 'Podiatrist'";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {

    echo "<tr>";
    echo "<td>".$row["licensenum"]."</td>";
    echo "<td>".$row["firstname"]."</td>";
    echo "<td>".$row["lastname"]."</td>";
    echo "<td>".$row["licensedate"]."</td>";
    echo "<td>".$row["birthdate"]."</td>";
    echo "<td>".$row["hosworksat"]."</td>";
    echo "<td>".$row["speciality"]. "</td></tr>";

}
mysqli_free_result($result);
echo "</ol>";
?>

</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
