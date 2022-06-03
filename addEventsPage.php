<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title> Explore Us - Year of Stories</title> 
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

<h1 class="title">Add Events</h1>

<form id="adminLogin" onsubmit="return signUpValidation()" action="addEvents.php" method="post">
Event Name: <br>
<input class="adminText" type="text" name="eventName">
<br><br>
Date of Event: <br>
<input class="adminText" type="datetime-local" name="eventDate">
<br><br>
Number of Spaces: <br>
<input class="adminText" type="number" name="eventSpaces">
<br><br>
Short Description - Appears on Acivities Page (Max 100 characters): <br>
<textarea rows="5" class="adminTextBox" type="text" name="eventShortDescription">
</textarea><br><br>
Activity Description - Appears on Master Details Page (Max 1000 characters): <br>
<textarea rows="5" class="adminTextBox" type="text" name="eventLongDescription">
</textarea><br><br>
Event Image: <br>
<input class="adminText" type="file" name="eventImage">
<br><br>
<input id="adminButton" type="submit"  onsubmit="return signUpValidation()" value="Submit">
</form>

<p id="errorMessage"> </p>
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
	
	function signUpValidation(x) { //form that validates the inputs in the form
		var xeventName = document.forms["adminLogin"]["eventName"].value; /* declarations of the values from the text boxes */
		var xeventDate = document.forms["adminLogin"]["eventDate"].value;
		var xeventSpaces = document.forms["adminLogin"]["eventSpaces"].value;
		var xeventShortDescription = document.forms["adminLogin"]["eventShortDescription"].value;
		var xeventLongDescription = document.forms["adminLogin"]["eventLongDescription"].value;
		var xeventImage = document.forms["adminLogin"]["eventImage"].value;
		
		if (xeventName == null || xeventName == ""){ 
			document.getElementById("errorMessage").innerHTML = "Event name has not been filled out!";
			return false;
		}
		
		
		if (xeventDate == null || xeventDate == ""){
			document.getElementById("errorMessage").innerHTML = "You seem to have forgot about the event date!";
			return false;
		}
			
		
		if (xeventSpaces == null || xeventSpaces == "") {  
			document.getElementById("errorMessage").innerHTML = "Event spaces has not been included!";
			return false;
		}
		
		if (xeventSpaces <= 0) {  
			document.getElementById("errorMessage").innerHTML = "Event spaces must be higher than 0!";
			return false;
		}
		
		if (xeventShortDescription == null || xeventShortDescription == "") {  
			document.getElementById("errorMessage").innerHTML = "Short description has not been completed!";
			return false;
		}
		
		if (xeventLongDescription == null || xeventLongDescription == "") {  
			document.getElementById("errorMessage").innerHTML = "Long description has not been completed!";
			return false;
		}
		
		if (xeventImage == null || xeventImage == "") {  
			document.getElementById("errorMessage").innerHTML = "Event image has not been included!";
			return false;
		}
			
	}
</script>