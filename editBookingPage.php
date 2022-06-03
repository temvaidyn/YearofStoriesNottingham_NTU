<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title> Edit Booking - Year of Stories</title> 
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
$bookingID = $_REQUEST["ID"];
$sql = "SELECT * FROM bookings WHERE bookingID = '".$bookingID."'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result)
?>
<h1 class="title"><?php echo 'Edit booking for '. $row["parentName"]; ?></h1>

<?php echo "<form id='adminLogin' onsubmit='return signUpValidation()' action='editBooking.php' method='post'>" ?>
Booking ID (Readonly): <br>
<input class="adminText" type="text" name="bookingID" value="<?php echo $row["bookingID"]?>" readonly>
<input class="adminText" type="text" name="eventName" value="<?php echo $row["eventName"]?>" hidden>
<br><br>
Parent / Guardian Name: <br>
<input class="adminText" type="text" name="parentName" value="<?php echo $row["parentName"]?>">
<br><br>
Number of Spaces <br>
<input class="adminText" type="number" name="noOfAttendees" value="<?php echo $row["noOfAttendees"]?>">
<br><br>
Contact Number: <br>
<input class="adminText" type="text" name="contactNumber" value="<?php echo $row["contactNumber"]?>">
<br><br>
Email Address: <br>
<input class="adminText" type="text" name="emailAddress" value="<?php echo $row["emailAddress"]?>">
<br><br>
<input id="adminButton" type="submit" onsubmit="return signUpValidation()" value="Edit Booking">
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
		var xparentName = document.forms["adminLogin"]["parentName"].value; /* declarations of the values from the text boxes */
		var xnoOfAttendees = document.forms["adminLogin"]["noOfAttendees"].value;
		var xcontactNumber = document.forms["adminLogin"]["contactNumber"].value;
		var xemailAddress = document.forms["adminLogin"]["emailAddress"].value;
		
		if (xparentName == null || xparentName == ""){ 
			document.getElementById("errorMessage").innerHTML = "Parent name has not been filled out!";
			return false;
		}
			
		
		if (xnoOfAttendees == null || xnoOfAttendees == "") {  
			document.getElementById("errorMessage").innerHTML = "Number of attendees has not been included!";
			return false;
		}
		
		if (xnoOfAttendees <= 0) {  
			document.getElementById("errorMessage").innerHTML = "Number of attendees must be higher than 0!";
			return false;
		}
		
		if (xcontactNumber == null || xcontactNumber == "") {  
			document.getElementById("errorMessage").innerHTML = "Contact number has not been included!";
			return false;
		}
		
		if (xcontactNumber.length < 10) {
			document.getElementById("errorMessage").innerHTML = "Invalid contact number!";
			return false;
		}
		
		if (xemailAddress == null || xemailAddress == "") {  
			document.getElementById("errorMessage").innerHTML = "Email address has not been included!";
			return false;
		}
		
		if (!xemailAddress.includes("@")) {
			document.getElementById("errorMessage").innerHTML = "Invalid email address!";
			return false;
		}
		
			
	}
</script>