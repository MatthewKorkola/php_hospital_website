<?php
// This file assigns a relationship between a doctor and a patient.
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assign Relationship Between Doctor and Patient</title>
<link rel="stylesheet" type="text/css" href="hospital.css">
<link href="https://fonts.googleapis.com/css?family=Mali"
rel="stylesheet">
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   $licenseNum= $_POST["licensenum"];
   $ohipNum = $_POST["ohipnum"];

   $doctorresult = mysqli_query($connection,"SELECT * FROM doctor WHERE licensenum='$licenseNum'");
   $patientresult = mysqli_query($connection,"SELECT * FROM patient WHERE ohipnum='$ohipNum'");
   if (mysqli_num_rows($doctorresult) == 0 || mysqli_num_rows($patientresult) == 0)
   {

      // Either the doctor or the patient (or both) does not exist in the database.
      echo '<script>alert("Error: cannot assign a relationship because either the doctor or the patient (or both) do not exist in the database.")</script>';
      echo "Cannot Assign Relationship";


   }

   else
   {
      // Both the doctor and the patient exist in the database.
      // Check if a relationship already exists.
      $relationshipresult = mysqli_query($connection,"SELECT * FROM looksafter WHERE licensenum ='$licenseNum' AND ohipnum = '$ohipNum'");
       if (mysqli_num_rows($relationshipresult) == 0)
       {
          // The relationship does not exist, so add one.
          $query = 'INSERT INTO looksafter values("' . $licenseNum . '","' . $ohipNum . '")';
          if (!mysqli_query($connection, $query)) {
              die("Error: insert failed" . mysqli_error($connection));
          }
           echo "New Relationship Added";

       }
       else
       {
          // The relationship already exists, so output a warning.
          echo '<script>alert("Error: cannot assign a relationship because the doctor and patient already have a relationship.")</script>';
          echo "Cannot Assign Relationship";
       }

       mysqli_free_result($relationshipresult);
    }

    mysqli_free_result($doctorresult);
    mysqli_free_result($patientresult);
    mysqli_close($connection);
 
 ?>
 </ol>
 </body>
 </html>
 