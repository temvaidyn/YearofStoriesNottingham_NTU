<?php
include "connect.php";

if(isset($_POST["bookingID"])){
	$bookingID = $_POST["bookingID"];
}

if(isset($_POST["parentName"])){
	$parentName = $_POST["parentName"];
	$parentName = str_replace("'","\'",$parentName);
	
}

if(isset($_POST["eventName"])){
	$eventName = $_POST["eventName"];
	$eventName = str_replace("'","\'",$eventName);
	$sql = "SELECT * FROM activities WHERE name = '".$eventName."'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
}

if(isset($_POST["noOfAttendees"])){
	$sql = "SELECT * FROM bookings WHERE bookingID = '".$bookingID."'";
	$result2 = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result2);
	$oldNoOfAttendees = $row["noOfAttendees"];
	$noOfAttendees = $_POST["noOfAttendees"];
	$sql = "UPDATE activities SET noOfSpaces = noOfSpaces - '".$noOfAttendees."' + '".$oldNoOfAttendees."'  WHERE name = '".$eventName."'";
	$result = mysqli_query($con, $sql);
	$sql = "SELECT noOfSpaces FROM activities WHERE name = '".$eventName."'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
		if($row["noOfSpaces"] < 0){
		$sql = "UPDATE activities SET noOfSpaces = noOfSpaces + '".$noOfAttendees."' + '".$oldNoOfAttendees."'  WHERE name = '".$eventName."'";
		$result = mysqli_query($con, $sql);
		header("Location: viewBookings.php");
		exit;
		}
}

if(isset($_POST["emailAddress"])){
	$emailAddress = $_POST["emailAddress"];
	$emailAddress = str_replace("'","\'",$emailAddress);
}
	
if(isset($_POST["contactNumber"])){
	$contactNumber = $_POST["contactNumber"];
}

$sql = "UPDATE bookings SET parentName = '".$parentName."', noOfAttendees = '".$noOfAttendees."', contactNumber = '".$contactNumber."', emailAddress = '".$emailAddress."' WHERE bookingID = '".$bookingID."'";
if (mysqli_query($con, $sql)){
		header("Location: viewBookings.php");
	}
	else {
		header("Location: editBookingPage.php");
	}
?>

