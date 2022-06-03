<?php
include "connect.php";
$name = $_REQUEST["ID"];
$sql = "SELECT * FROM activities WHERE name = '".$name."'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST["parentName"])){
	$parentName = $_POST["parentName"];
	$parentName = str_replace("'","\'",$parentName);
}

if(isset($_POST["noOfAttendees"])){
	$noOfAttendees = $_POST["noOfAttendees"];
	$sql = "UPDATE activities SET noOfSpaces = noOfSpaces - '".$noOfAttendees."'  WHERE name = '".$name."'";
	$result = mysqli_query($con, $sql);
	$sql = "SELECT noOfSpaces FROM activities WHERE name = '".$name."'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
		if($row["noOfSpaces"] < 0){
		$sql = "UPDATE activities SET noOfSpaces = noOfSpaces + '".$noOfAttendees."'  WHERE name = '".$name."'";
		$result = mysqli_query($con, $sql);
		header("Location: bookingPage.php?ID=".$name."");
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

$sql = "INSERT INTO bookings (eventName, parentName, noOfAttendees, contactNumber, emailAddress) VALUES ('$name', '$parentName', '$noOfAttendees', '$contactNumber', '$emailAddress')";
if (mysqli_query($con, $sql)){
		header("Location: bookingSuccess.php?ID=".$name."");
	}
	else {
		header("Location: bookingPage.php?ID=".$name."");
	}
?>
