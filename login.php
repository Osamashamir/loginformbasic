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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fastnu";

/////////////////GET POST VALUES//////////////////
$em = $_POST["email"];
$pw = $_POST["pass"];
/////////////////GET POST VALUES//////////////////

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM user where email = '".$em."' AND pass=".$pw;
//echo $sql;
//die();

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  //  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	echo "OK you are loggedin."."<BR>";
	$_SESSION['loggedin']="YES";
	$_SESSION['FirstName']=$row["FirstName"];
	$_SESSION['LastName']=$row["LastName"];

	echo "<a href='dashboard.php'> Click here to goto the dashboard!</a>";
  }
} else {
  //echo "0 results";
	echo "Sorry email or password does not match in our system<BR>";
	echo "Please register<BR>";
	$_SESSION['loggedin']="NO";
}
mysqli_close($conn);
?>

</body>
</html>