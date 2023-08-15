<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fastnu";


/////////////////GET POST VALUES//////////////////
$fn = $_POST["fname"];
$ln = $_POST["lname"];
$cn = $_POST["cnic"];
$em = $_POST["email"];
$pw = $_POST["pass"];
/////////////////GET POST VALUES//////////////////

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user ( FirstName, LastName, CNIC, email, pass )
VALUES ('".$fn."', '".$ln."', '".$cn."', '".$em."', '".$pw."')";

//echo $sql."<BR>";

if (mysqli_query($conn, $sql)) {
  echo "Congratulations you are now registerd in our system."."<BR>";
  echo "<a href='login.html'> Please Click here to Login</a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

</body>
</html>