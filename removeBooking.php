<?php
include "connect.php";

$ID = $_REQUEST["ID"];

$sql = "DELETE FROM bookings WHERE bookingID = '".$ID."'";
if(mysqli_query($con, $sql))
{
	header("Location: viewBookings.php");
	exit;
}

else
{
	echo mysqli_error($con);
}
?>