<?php
// This file allows the user to access doctor information.
?>

<br><br>
<form action="ascendname.php" method="post">
<input type="submit" value="See doctor information (ordered by ascending last name)">
</form>
<?php
//mysqli_close($connection);
?>

<form action="descendname.php" method="post">
<input type="submit" value="See doctor information (ordered by descending last name)">
</form>
<?php
//mysqli_close($connection);
?>

<form action="ascenddate.php" method="post">
<input type="submit" value="See doctor information (ordered by ascending birthdate)">
</form>
<?php
//mysqli_close($connection);
?>

<form action="descenddate.php" method="post">
<input type="submit" value="See doctor information (ordered by descending birthdate)">
</form>
<?php
//mysqli_close($connection);
?>
