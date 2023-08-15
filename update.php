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
$id = $_POST["id"];
$fn = $_POST["fname"];
$ln = $_POST["lname"];
// $cn = $_POST["cnic"];
// $em = $_POST["email"];
// $pw = $_POST["pass"];
/////////////////GET POST VALUES//////////////////

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//$sql = "INSERT INTO user ( FirstName, LastName, CNIC, email, pass )
//VALUES ('".$fn."', '".$ln."', '".$cn."', '".$em."', '".$pw."')";

$sql = "UPDATE user SET FirstName = '".$fn."', LastName = '".$ln."' WHERE ID = '".$id."'";

//echo $sql."<BR>";
//die();

if (mysqli_query($conn, $sql)) {
  echo "Congratulations data is updated in our system."."<BR>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

</body>
</html>