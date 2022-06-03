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

<h1 class="title">Add Partners</h1>

<form id="adminLogin" onsubmit="return signUpValidation()" action="addPartners.php" method="post">
Partner Name: <br>
<input class="adminText" type="text" name="partnerName">
<br><br>
Partner Website (URL): <br>
<input class="adminText" type="URL" name="partnerLink">
<br><br>
Partner Logo: <br>
<input class="adminText" type="file" name="partnerLogo">
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
		var xpartnerName = document.forms["adminLogin"]["partnerName"].value; /* declarations of the values from the text boxes */
		var xpartnerLink = document.forms["adminLogin"]["partnerLink"].value;
		var xpartnerLogo = document.forms["adminLogin"]["partnerLogo"].value;
		
		if (xpartnerName == null || xpartnerName == ""){ 
			document.getElementById("errorMessage").innerHTML = "Partner name has not been filled out!";
			return false;
		}
		
		
		if (xpartnerLink == null || xpartnerLink == ""){
			document.getElementById("errorMessage").innerHTML = "You seem to have forgot about the partner link!";
			return false;
		}
			
		
		if (xpartnerLogo == null || xpartnerLogo == "") {  
			document.getElementById("errorMessage").innerHTML = "Partner logo has not been included!";
			return false;
		}
			
	}
</script>