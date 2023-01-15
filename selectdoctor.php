<?php
// This file uses a text button to obtain the doctor license number so that the doctor's patient information can be displayed.
?>

<link rel="stylesheet" type="text/css" href="hospital.css">
<link href="https://fonts.googleapis.com/css?family=Mali"
rel="stylesheet">
<p>
<hr>
<p>
<h2> Select a Doctor:</h2>
<form action="displaypatientdata.php" method="post">
Enter Doctor License Number: <input type="text" name="licensenum"><br>
<br><br>
<input type="submit" value="Continue">

</form>
