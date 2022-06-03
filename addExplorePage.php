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

<h1 class="title">Add Explore Us Content</h1>

<form id="adminLogin" onsubmit="return signUpValidation()" action="addExplore.php" method="post">
Title: <br>
<input class="adminText" type="text" name="exploreTitle">
<br><br>
Article Description: <br>
<textarea rows="5" class="adminTextBox" type="text" name="exploreDescription">
</textarea><br><br>
Article Link (URL): <br>
<input class="adminText" type="URL" name="exploreLink">
<br><br>
Article Image: <br>
<input class="adminText" type="file" name="exploreImage">
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
		var xexploreTitle = document.forms["adminLogin"]["exploreTitle"].value; /* declarations of the values from the text boxes */
		var xexploreDescription = document.forms["adminLogin"]["exploreDescription"].value;
		var xexploreLink = document.forms["adminLogin"]["exploreLink"].value;
		var xexploreImage = document.forms["adminLogin"]["exploreImage"].value;
		
		if (xexploreTitle == null || xexploreTitle == ""){ 
			document.getElementById("errorMessage").innerHTML = "Article title has not been filled out!";
			return false;
		}
		
		
		if (xexploreDescription == null || xexploreDescription == ""){
			document.getElementById("errorMessage").innerHTML = "You seem to have forgot about the article description!";
			return false;
		}
			
		
		if (xexploreLink == null || xexploreLink == "") {  
			document.getElementById("errorMessage").innerHTML = "Article link has not been included!";
			return false;
		}
		
		if (xexploreImage == null || xexploreImage == "") {  
			document.getElementById("errorMessage").innerHTML = "Article image has not been included!";
			return false;
		}
			
	}
</script>