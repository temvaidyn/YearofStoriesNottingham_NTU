<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title> Edit Events - Year of Stories</title> 
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
<?php 
include "connect.php";
$exploreID = $_REQUEST["ID"];
$sql = "SELECT * FROM explore WHERE ID = '".$exploreID."'";;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<h1 class="title">Edit Article Image For <?php echo $row["title"] ?></h1>

<?php echo "<form id='adminLogin' onsubmit='return signUpValidation()' action='editExploreImage.php?ID=" .$row["ID"]. "' method='post'>" ?>
Article ID (Read Only): <br>
<input class="adminText" type="text" name="exploreID" value="<?php echo $row["ID"]; ?>" readonly>
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
	
		var xexploreImage = document.forms["adminLogin"]["exploreImage"].value;
		
		if (xexploreImage == null || xexploreImage == "") {  
			document.getElementById("errorMessage").innerHTML = "Article image has not been included!";
			return false;
		}
			
	}
</script>