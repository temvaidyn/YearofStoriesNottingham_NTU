<?php
include "connect.php";

if(isset($_POST["partnerID"])){
	$partnerID = $_POST["partnerID"];
}

if(isset($_POST["partnerName"])){
	$partnerName = $_POST["partnerName"];
	$partnerName = str_replace("'","\'",$partnerName);
}

if(isset($_POST["partnerLink"])){
	$partnerLink = $_POST["partnerLink"];
}

$sql = "UPDATE partners SET name = '".$partnerName."', link = '".$partnerLink."' WHERE ID = '".$partnerID."'";
mysqli_query($con, $sql);
header("Location: viewPartnersPage.php");
?>