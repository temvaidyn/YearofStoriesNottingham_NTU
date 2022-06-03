<?php
include "connect.php";

$title = $_REQUEST["title"];

$sql = "DELETE FROM explore WHERE title = '".$title."'";
if(mysqli_query($con, $sql))
{
	header("Location: viewExplorePage.php");
	exit;
}

else
{
	echo mysqli_error($con);
}
?>