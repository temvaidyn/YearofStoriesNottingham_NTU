<?php
include "connect.php";

if(isset($_POST["eventID"])){
	$eventID = $_POST["eventID"];
}

if(isset($_POST["eventImage"])){
	$eventImage = $_POST["eventImage"];
}

$sql = "UPDATE activities SET eventImage = '".$eventImage."' WHERE ID = '".$eventID."'";
mysqli_query($con, $sql);
header("Location: viewEventsPage.php");
?>