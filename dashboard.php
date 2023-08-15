<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php



$fn = $_SESSION['FirstName'];
$ln = $_SESSION['LastName'];

echo "Welcome <B>'".$fn.", ".$ln."' </B> to our management system dashboard!!!"."<BR>";



echo "<a href='viewallusers.php'> Click here to view all users!</a>"."<BR>";

echo "<a href='logout.php'> Click here to logout!</a>"."<BR>";

echo "<a href='updateForm.html'> Click here to update!</a>";




?>

</body>
</html>