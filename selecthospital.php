<?php
// This file uses radio buttons to determine which hospital code to use to display the hospital data.
?>

<link rel="stylesheet" type="text/css" href="hospital.css">
<link href="https://fonts.googleapis.com/css?family=Mali"
rel="stylesheet">
<p>
<hr>
<p>
<h2> Select a Hospital:</h2>
<form action="displayhospitaldata.php" method="post">
<br>
<input type="radio" name="hoscode" value="BBC">BBC<br>
<input type="radio" name="hoscode" value="ABC">ABC<br>
<input type="radio" name="hoscode" value="DDE">DDE<br>
<br><br>
<input type="submit" value="Continue">

</form>
