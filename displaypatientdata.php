<?php
// This file takes the entered doctor license number and displays the doctor's patient information.
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display Patient Information</title>
<link rel="stylesheet" type="text/css" href="hospital.css">
<link href="https://fonts.googleapis.com/css?family=Mali"
rel="stylesheet">
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>The Doctor Treats the Following Patients:</h1>
<ol>

<table>
<tr>
    <td>ohipnum</td>
    <td>firstname</td>
    <td>lastname</td>
</tr>


<?php
   $licenseNum= $_POST["licensenum"];

   $result = mysqli_query($connection,"SELECT * FROM doctor WHERE licensenum='$licenseNum'");
   if (!mysqli_num_rows($result) == 0)
   {

      // This query links to the looksafter table, which is necessary to eventually link to the patient table.
      $result2 = mysqli_query($connection,"SELECT * FROM looksafter WHERE licensenum='$licenseNum'");
      if (!result2) {
           die("Error: insert failed" . mysqli_error($connection));
       }
      while ($row = mysqli_fetch_assoc($result2))
      {
          $ohipKey = $row["ohipnum"];

          // Now that the OHIP key is found, the patient information can be printed out after another query.
          $result3 = mysqli_query($connection,"SELECT ohipnum, firstname, lastname FROM patient WHERE ohipnum='$ohipKey'");
          if (!result3) {
               die("Error: insert failed" . mysqli_error($connection));
          }
          while ($row = mysqli_fetch_assoc($result3))
          {
               echo "<tr>";
               echo "<td>".$row["ohipnum"]."</td>";
               echo "<td>".$row["firstname"]."</td>";
               echo "<td>".$row["lastname"]."</td>";

          }

         mysqli_free_result($result3);


        }
        mysqli_free_result($result2);
  
     }
  
     else
     {
        // The doctor does not exist in the database.
        echo '<script>alert("Error: the doctor does not exist in the database.")</script>';
        echo "Cannot view patient information.";
     }
  
     mysqli_free_result($result);
     mysqli_close($connection);
  
  ?>
  </ol>
  </body>
  </html>
  