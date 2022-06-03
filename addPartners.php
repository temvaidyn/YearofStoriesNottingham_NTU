<?php
session_start();
include "connect.php";

if(isset($_POST["partnerName"])){
	$partnerName = $_POST["partnerName"];
	$partnerName = str_replace("'","\'",$partnerName);
}
	
if(isset($_POST["partnerLink"])){
	$partnerLink = $_POST["partnerLink"];
}

if(isset($_POST["partnerLogo"])){
	$partnerLogo = $_POST["partnerLogo"];
}

$sql = "SELECT * FROM partners WHERE name = '$partnerName'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) == 1){
	header("Location: addPartnersPage.php");
}

else {
	$sql = "INSERT INTO partners (name, link, image) VALUES('$partnerName', '$partnerLink', '$partnerLogo')";
	if (mysqli_query($con, $sql)){
		header("Location: viewPartnersPage.php");
	}
	else {
		header("addPartnersPage.php");
	}
}