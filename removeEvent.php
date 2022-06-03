<?php
include "connect.php";

$name = $_REQUEST["name"];

$sql = "DELETE FROM activities WHERE name = '".$name."'";
if(mysqli_query($con, $sql))
{
	header("Location: viewEventsPage.php");
	exit;
}

else
{
	echo mysqli_error($con);
}
?>