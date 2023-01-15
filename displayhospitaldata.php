<?php
// This file uses the acquired hospital code to display hospital information.
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
<h1>Hospital Information:</h1>
<ol>

<table>
<tr>
    <td>hosname</td>
    <td>city</td>
    <td>prov</td>
    <td>numofbed</td>
</tr>


<?php
   $hosCode= $_POST["hoscode"];

      // With the hospital code, the hospital data can be obtained.
      $hosresult = mysqli_query($connection,"SELECT hosname, city, prov, numofbed, headdoc FROM hospital WHERE hoscode='$hosCode'");
      if (!hosresult) {
           die("Error: insert failed" . mysqli_error($connection));
       }
      while ($row = mysqli_fetch_assoc($hosresult))
      {
          $hosKey = $row["headdoc"];

          echo "<tr>";
          echo "<td>".$row["hosname"]."</td>";
          echo "<td>".$row["city"]."</td>";
          echo "<td>".$row["prov"]."</td>";
          echo "<td>".$row["numofbed"]."</td>";

      }
      mysqli_free_result($hosresult);


     // Now that the head doctor has been determined, the head doctor's first and last name can be printed out.
     $headdocresult = mysqli_query($connection,"SELECT firstname, lastname FROM doctor WHERE licenseNum='$hosKey'");
      if (!headdocresult) {
           die("Error: insert failed" . mysqli_error($connection));
       }
      while ($row = mysqli_fetch_assoc($headdocresult))
      {

           echo "Head Doctor: ";
           echo $row["firstname"];
           echo " ";
           echo $row["lastname"];

      }
      mysqli_free_result($headdocresult);


      // The first and last names of everyone who works at the hospital can be determined with the same hospital code acquired from earlier.
      $doctorresult = mysqli_query($connection,"SELECT firstname, lastname FROM doctor WHERE hosworksat='$hosCode'");
      if (!doctorresult) {
           die("Error: insert failed" . mysqli_error($connection));
       }

      echo "<br/><br/>The following doctors work at this hospital: <br/>";

      while ($row = mysqli_fetch_assoc($doctorresult))
      {
           echo " ";
           echo $row["firstname"];
           echo " ";
           echo $row["lastname"];
           echo "<br/>";
      }
      mysqli_free_result($doctorresult);

      echo "<br/>";

      mysqli_close($connection);


?>
</ol>
</body>
</html>
