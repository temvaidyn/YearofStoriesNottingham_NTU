<?php
include "connect.php";

$name = $_REQUEST["name"];

$sql = "DELETE FROM partners WHERE name = '".$name."'";
if(mysqli_query($con, $sql))
{
	header("Location: viewPartnersPage.php");
	exit;
}

else
{
	echo mysqli_error($con);
}
?>