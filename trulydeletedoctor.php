<?php
// This file deletes a doctor from the database.
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Doctor</title>
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
   $yesOrNO = $_POST["yesorno"];

   // If the user backs out, return to the main menu.
   if ($yesOrNO == "no" )
   {
      header('Location: hospital.php');
   }

   else
   {

      $result = mysqli_query($connection,"SELECT * FROM doctor WHERE licensenum='$licenseNum'");
      if (mysqli_num_rows($result) == 0)
      {

         // The license number does not exist in the doctor table, so the doctor cannot be deleted.
         echo '<script>alert("Error: cannot delete the doctor because the doctor does not exist in the database.")</script>';
         echo "Cannot delete doctor";

      }

      else
      {

         // Check if the doctor is treating patients or if the doctor is the head of a hospital.
         $treating = mysqli_query($connection,"SELECT * FROM looksafter WHERE licensenum='$licenseNum'");
         $head = mysqli_query($connection,"SELECT * FROM hospital WHERE headdoc='$licenseNum'");

         if (mysqli_num_rows($treating) == 0 && mysqli_num_rows($head) == 0)
         {

             // The doctor can be deleted.
             $query = "DELETE FROM doctor WHERE licensenum = '$licenseNum'";
             if (!mysqli_query($connection, $query)) {
                die("Error: insert failed" . mysqli_error($connection));
             }
             echo "The doctor was deleted.";
             mysqli_close($connection);


         }

         else
         {
             // The doctor either acts as a head doctor or treats patients (or both), so the doctor cannot be deleted.
             echo '<script>alert("Error: cannot delete the doctor because the doctor is either acting as a head doctor, currently treating patients, or both.")</script>';
             echo "Cannot delete doctor";
         }


      }
   }

?>
</ol>
</body>
</html>
