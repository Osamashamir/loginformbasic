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

session_unset();
session_destroy();


echo "OK, thanks for using our system, please come back again."."<BR>";
echo "<a href='login.html'> Click here to Login again!</a>";

?>

</body>
</html>