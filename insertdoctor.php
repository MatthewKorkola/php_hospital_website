<?php
// This file uses text and radio buttons to gather the necessary data to insert a doctor into the database.
?>

<link rel="stylesheet" type="text/css" href="hospital.css">
<link href="https://fonts.googleapis.com/css?family=Mali"
rel="stylesheet">
<p>
<hr>
<p>
<h2> Add a New Doctor:</h2>
<form action="trulyinsertdoctor.php" method="post">
New Doctor License Number: <input type="text" name="licensenum"><br>
New Doctor First Name: <input type="text" name="firstname"><br>
New Doctor Last Name: <input type="text" name="lastname"><br>
New Doctor License Date: <input type="date" name="licensedate"><br>
New Doctor Birthdate: <input type="date" name="birthdate"><br>
New Doctor Specialty: <input type="text" name="speciality"><br>


Pick a Hospital: <br>
<input type="radio" name="hosworksat" value="BBC">BBC<br>
<input type="radio" name="hosworksat" value="ABC">ABC<br>
<input type="radio" name="hosworksat" value="DDE">DDE<br>
<input type="submit" value="Add New Doctor">
</form>
