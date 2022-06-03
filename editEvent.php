<?php
include "connect.php";
$sql = "SELECT * FROM activities WHERE ID = '".$eventID."'";;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result); //obtaining old event name so it can be referended in the event bookings statement
$oldEventName = $row["name"];

if(isset($_POST["eventID"])){
	$eventID = $_POST["eventID"];
}

if(isset($_POST["eventName"])){
	$eventName = $_POST["eventName"];
	$eventName = str_replace("'","\'",$eventName);
}
	
if(isset($_POST["eventDate"])){
	$eventDate = $_POST["eventDate"];
}

if(isset($_POST["eventSpaces"])){
	$eventSpaces = $_POST["eventSpaces"];
}

if(isset($_POST["eventShortDescription"])){
	$eventShortDescription = $_POST["eventShortDescription"];
	$eventShortDescription = str_replace("'","\'",$eventShortDescription);
}
	
if(isset($_POST["eventLongDescription"])){
	$eventLongDescription = $_POST["eventLongDescription"];
	$eventLongDescription = str_replace("'","\'",$eventLongDescription);
}
$sql = "UPDATE bookings SET eventName = '".$eventName."' WHERE eventName = '".$oldEventName."' ";
mysqli_query($con, $sql);

$sql = "UPDATE activities SET name = '".$eventName."', date = '".$eventDate."',  noOfSpaces = '".$eventSpaces."', shortDescription = '".$eventShortDescription."', activityDescription = '".$eventLongDescription."' WHERE ID = '".$eventID."' ";
mysqli_query($con, $sql);
header("Location: viewEventsPage.php");
?>