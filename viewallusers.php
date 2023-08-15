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

//Select Data From a MySQL Database   via  mysqli_fetch_assoc

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fastnu";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<table border='1'><tr>";
  while($row = mysqli_fetch_row($result)) {	
	echo "<tr>";

  	//echo "<td>{$field->name}</td>";
  	foreach($row as $cell)		
		echo "<td>$cell</td>";	
	echo "</tr>\n";
    //echo "FirstName: " . $row["FirstName"]. " - LastName: " . $row["LastName"]. " - CNIC : " . $row["CNIC"]. " - Email : " . $row["email"]. " - Password : " . $row["pass"]. "<br>";

  }
} else {
  echo "0 results";
}

echo "<BR><BR>";
echo "<a href='dashboard.php'> Click here to goto the dashboard!</a>";
echo "<BR><BR>";
mysqli_free_result($result);
mysqli_close($conn);

?>

</body>
</html>