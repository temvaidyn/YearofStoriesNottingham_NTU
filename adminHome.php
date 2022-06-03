<?php
session_start();
	
if(!isset($_SESSION["username"])){

	header("Location: adminLogon.php");
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Admin Home - Year of Stories</title> 
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

<h1 class="title">Admin Home</h1>


<form action="logout.php">
<input id="adminButton" type="submit" value="Logout" action="logout.php">
</form>


<div class="choices">
<a href="addEventsPage.php">
<div id="choiceBoxLeft">
<h1 class="title">Add Event</h1><br>

</div>
</a>
<a href="viewEventsPage.php">
<div id="choiceBoxRight">
<h1 class="title">View Events</h1><br>

</div>
</a>

<a href="addExplorePage.php">
<div id="choiceBoxLeft">
<h1 class="title">Add Explore Content</h1><br>

</div>
</a>
<a href="viewExplorePage.php">
<div id="choiceBoxRight">
<h1 class="title">View Explore Content</h1><br>
</div>
</a>


<a href="addPartnersPage.php">
<div id="choiceBoxLeft">
<h1 class="title">Add Partners</h1><br>

</div>
</a>
<a href="viewPartnersPage.php">
<div id="choiceBoxRight">
<h1 class="title">View Partners</h1><br>

</div>
</a>
<a href="viewBookings.php">
<div id="choiceBoxLeft">
<h1 class="title">View Bookings</h1><br>

</div>
</a>
</div>


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