<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title> View Bookings - Year of Stories</title> 
  <meta charset="utf-8">
  <link rel="stylesheet" href="stylesheet.css"> <!-- link to stylesheet */-->
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,600&display=swap" rel="stylesheet"> <!-- Link to the font -->
</head>
</body>

<div class="header"> <!-- header which contains nav bar or burger bar on smaller screens */-->

<div class="navBar"> <!-- navbar for screens larger than 910px */-->
  <div id="nav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="activities.php">What's On</a></li>
        <li><a href="exploreUs.php">Explore Us</a></li>
        <li><a href="partners.php">Our Partners</a></li>
      </ul>
    </div>
</div>
<img id="burgerBar" src="img/hamburgerIcon.jpg" onclick="navBarVisibility()">
</div>
<div class="navBar2"> <!-- vertical navbar displayed outside header displayed on screens smaller than 910px */-->
	<div id="nav2">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="activities.php">What's On</a></li>
				<li><a href="exploreUs.php">Explore Us</a></li>
				<li><a href="partners.php">Our Partners</a></li>
			</ul>
		</div>
</div>

<h1 class="title">View Bookings</h1>


<?php
include "connect.php";

$sql = "SELECT * FROM bookings";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
	echo "<div class='detailsInfo'>".
         "<p class='paragraph'>Booking ID: <br>" .$row["bookingID"]. 
	         "<br><br>Event Name: <br>".$row["eventName"]. 
	         "<br><br>Guardian Name: <br>" .$row["parentName"].
			 "<br><br>Number of Attendees: <br>" .$row["noOfAttendees"].
			 "<br><br>Contact Number: <br>" .$row["contactNumber"].
			 "<br><br>Email Address: <br>" .$row["emailAddress"].
			 "<a href='editBookingPage.php?ID=" .$row["bookingID"]. "'>".
			 "<br><br><button id='adminButton' type='button'>Edit Booking</button>".
			 "</a>".
			 "<a href='removeBooking.php?ID=" .$row["bookingID"]. "'>".
			 "<br><button id='adminButton' type='button'>Cancel Booking</button>".
			 "</br>".
			 "</a>".
			 "</p>".
	         "</div><br><br>";
	}
}
else {
	echo "<p> No bookings have been found in the booking database! </p>";
}

?>

<footer>
  <div class="footer-content">
      <h3>Year of Stories 2023</h3>
      <p>&copy;2022 Copyright. Keep Calm and Never Copy-Paste Without Permission.  || <a href='adminLogon.php'> Admin </p>
  </div>
</footer>
</body>
<script language="javaScript">
	function navBarVisibility() { //function controlling visibility of navbar2 on smaller screens on clicking the burger bar
		var horiNavBar = document.querySelector(".navBar2");
		if (horiNavBar.style.display == "block") {
			horiNavBar.style.display = "none";
			console.log(horiNavBar);
		}
		
		else {
			horiNavBar.style.display = "block";
			console.log(horiNavBar);
		}
	}
</script>