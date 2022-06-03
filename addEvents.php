<?php
session_start();
include "connect.php";

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

if(isset($_POST["eventImage"])){
	$eventImage = $_POST["eventImage"];
}

$sql = "SELECT * FROM activities WHERE name = '$eventName'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) == 1){
	header("Location: addEventsPage.php");
}

else {
	$sql = "INSERT INTO activities (name, date, noOfSpaces, shortDescription, activityDescription, eventImage) VALUES('$eventName', '$eventDate', '$eventSpaces', '$eventShortDescription', '$eventLongDescription', '$eventImage')";
	if (mysqli_query($con, $sql)){
		header("Location: viewEventsPage.php");
	}
	else {
		header("addEventsPage.php");
	}
}
?>