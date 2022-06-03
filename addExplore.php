<?php
session_start();
include "connect.php";

if(isset($_POST["exploreTitle"])){
	$exploreTitle = $_POST["exploreTitle"];
	$exploreTitle = str_replace("'","\'",$exploreTitle);
}
	
if(isset($_POST["exploreDescription"])){
	$exploreDescription = $_POST["exploreDescription"];
	$exploreDescription = str_replace("'","\'",$exploreDescription);
}

if(isset($_POST["exploreLink"])){
	$exploreLink = $_POST["exploreLink"];
}

if(isset($_POST["exploreImage"])){
	$exploreImage = $_POST["exploreImage"];
}

$sql = "SELECT * FROM explore WHERE title = '$exploreTitle'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) == 1){
	header("Location: addExplorePage.php");
}

else {
	$sql = "INSERT INTO explore (title, description, link, image) VALUES('$exploreTitle', '$exploreDescription', '$exploreLink', '$exploreImage')";
	if (mysqli_query($con, $sql)){
		header("Location: viewExplorePage.php");
	}
	else {
		header("addExplorePage.php");
	}
}