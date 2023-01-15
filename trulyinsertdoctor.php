<?php
// This file inserts a new doctor into the database.
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add New Doctor</title>
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
   $firstName = $_POST["firstname"];
   $lastName =$_POST["lastname"];
   $licenseDate =$_POST["licensedate"];
   $birthDate =$_POST["birthdate"];
   $hosWorksAT =$_POST["hosworksat"];
   $speciality =$_POST["speciality"];


   $result = mysqli_query($connection,"SELECT * FROM doctor WHERE licensenum='$licenseNum'");
   if (mysqli_num_rows($result) == 0)
   {

      // The license number does not already exist in the doctor table, so add the new doctor.
      $query = 'INSERT INTO doctor values("' . $licenseNum . '","' . $firstName . '","' . $lastName . '","' . $licenseDate . '","' . $birthDate . '","' . $hosWorksAT . '","' . $special$
      if (!mysqli_query($connection, $query)) {
           die("Error: insert failed" . mysqli_error($connection));
       }
      echo "The new doctor was added.";
      mysqli_close($connection);


   }

   else
   {
      // The license number already exists in the doctor table, so the new doctor cannot be added.
      echo '<script>alert("Error: cannot add the new doctor because the license number is already taken.")</script>';
      echo "Cannot add doctor";
   }

?>
</ol>
</body>
</html>
