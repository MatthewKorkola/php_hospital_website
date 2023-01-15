<?php
// This file uses a text button to gather the license number of a doctor to delete, and it uses a radio button to confirm the user's choice to delete the doctor.
?>

<link rel="stylesheet" type="text/css" href="hospital.css">
<link href="https://fonts.googleapis.com/css?family=Mali"
rel="stylesheet">
<p>
<hr>
<p>
<h2> Delete a Doctor:</h2>
<form action="trulydeletedoctor.php" method="post">
Enter Doctor License Number: <input type="text" name="licensenum"><br>
<br><br>
<?php
echo "Are you sure you want to delete this doctor?";
?>
<br>
<input type="radio" name="yesorno" value="yes">yes<br>
<input type="radio" name="yesorno" value="no">no<br>
<br>
<input type="submit" value="Continue">

</form>
