<?php
// This file uses text buttons to gather the data necessary to assign a relationship between a doctor and patient.
?>

<link rel="stylesheet" type="text/css" href="hospital.css">
<link href="https://fonts.googleapis.com/css?family=Mali"
rel="stylesheet">
<p>
<hr>
<p>
<h2> Assign a Doctor to a Patient:</h2>
<form action="trulyassignrelationship.php" method="post">
Enter Doctor License Number: <input type="text" name="licensenum"><br>
Enter Patient OHIP Number: <input type = "text" name = "ohipnum">
<br><br>
<input type="submit" value="Continue">

</form>
