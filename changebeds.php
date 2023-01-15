<?php
// This file uses radio buttons to determine which hospital should have its number of beds changed.
// It also uses a number button to determine to what value the number of beds should be changed.
?>

<link rel="stylesheet" type="text/css" href="hospital.css">
<link href="https://fonts.googleapis.com/css?family=Mali"
rel="stylesheet">
<p>
<hr>
<p>
<h2> Select a Hospital at which to Change the Number of Beds:</h2>
<form action="trulychangebeds.php" method="post">
<br>
<input type="radio" name="hoscode" value="BBC">BBC<br>
<input type="radio" name="hoscode" value="ABC">ABC<br>
<input type="radio" name="hoscode" value="DDE">DDE<br>
<br><br>

New Number of Beds: <input type="number" name="numofbed"><br>

<input type="submit" value="Continue">

</form>
