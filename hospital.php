<?php
// Programmer Name: 35
// This file acts as a main menu.
?>

<!DOCTYPE html>
<html>
<head>
<title>Hospitals</title>
<link rel="stylesheet" type="text/css" href="hospital.css">
<link href="https://fonts.googleapis.com/css?family=Mali"
rel="stylesheet">
</head>
<body>

<script src="hospital.js"></script>
<?php
     include "connectdb.php";
?>
<h1>Hospital Information Main Menu </h1>

<?php
    echo "\n Select what you want to do:";
?>

<?php
    // List all the information about the doctors. The information can be ordered in four different ways.
    include 'getdoctordata.php';
?>

<hr>

<?php
    // Select one of the specialties, and then list all the doctor information about doctors with the selected specialty.
    include 'selectspecialty.php';
?>

<hr>

<?php
    // Insert a new doctor.
?>
    <form action="insertdoctor.php" method="post">
    <input type="submit" value="Insert a new doctor">
    </form>
<hr>


<?php
    // Delete a doctor.
?>
    <form action="deletedoctor.php" method="post">
    <input type="submit" value="Delete an existing doctor">
    </form>
<hr>


<?php
    // Assign a doctor to a patient.
?>
    <form action = "assignrelationship.php" method = "post">
    <input type="submit" value="Assign a doctor to a patient">
    </form>
<hr>



<?php
    // Select a doctor, and see the first name, last name, and OHIP number of any patient treated by that doctor.
?>
    <form action = "selectdoctor.php" method = "post">
    <input type="submit" value="Select a doctor, and see the first name, last name, and OHIP number of any patient treated by that doctor">
    </form>
<hr>



<?php
    // Select a hospitial, and see hospital information, head doctor information, and all doctors that work there"
?>
    <form action = "selecthospital.php" method = "post">
    <input type="submit" value="Select a hospitial, and see hospital information, head doctor information, and all doctors that work there">
    </form>
<hr>


<?php
    // Select a hospital, and change the number of beds at that hospital
?>
    <form action = "changebeds.php" method = "post">
    <input type="submit" value="Select a hospital, and change the number of beds at that hospital">
    </form>
<hr>

</body>
</html>

<?php
mysqli_close($connection);
?>
