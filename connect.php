<!DOCTYPE html>
<html>
<body>
<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "read on notts";
$con = mysqli_connect($host,$username,$password,$db);
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL:" .mysqli_connect_error();
}
else
{
}
?>
</body>
</html> 