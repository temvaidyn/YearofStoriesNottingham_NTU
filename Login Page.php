<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title> Login Page - Number1Tech.com</title>
<meta charset="utf-8">

<link rel="stylesheet" href="stylesheet.css"> <!-- link to stylesheet */-->
</head>
</body>

<div class="wrapper"> <!-- wrapper which borders the entire page */-->

</div>
<div class="header"> <!-- header which contains nav bar or burger bar on smaller screens */-->

<div class="navBar"> <!-- navbar for screens larger than 910px */-->
	<div id="nav">
			<ul>
				<li><a href="Home Page.php">Home</a></li>
				<li><a href="Product Page.php">Products</a></li>
				<li><a href="Report Page.php">Report</a></li>
				<li><a href="Feeder Page.php">Account</a></li>
			</ul>
		</div>
</div>
<img id="burgerBar" src="images/hamburgerIcon.jpg" onclick="navBarVisibility()"> <!--https://icon-library.com/images/hamburger-menu-icon-png-white/hamburger-menu-icon-png-white-15.jpg* appears on screens smaller than 910px on the right side of header/-->
</div>
<div class="navBar2"> <!-- vertical navbar displayed outside header displayed on screens smaller than 910px */-->
	<div id="nav2">
			<ul>
				<li><a href="Home Page.php">Home</a></li>
				<li><a href="Product Page.php">Products</a></li>
				<li><a href="Report Page.php">Report</a></li>
				<li><a href="Feeder Page.php">Account</a></li>
			</ul>
		</div>
</div>
<div class="content"> <!-- all content below the appears within this div*/-->
<div class="par1">			 <!--https://freerangestock.com/photos/136930/network--technology-background.html  parralix image that appears underneath the navbar*/-->
</div>
<h1 class="title"> Login </h1>

<p class="paragraph"> Please use the form below to login to an existing account. If you have not created an account, please use the sign up page to create one. </p>

<form id="signUpForm" onsubmit="return signUpValidation()" action="login.php" method="post">  <!--form allowing the user to log in is initiated*/-->
Username: <br>
<input class="signUpText" type="text" name="username">
<br><br>
Password: <br>
<input class="signUpText" type="password" name="choosePassword">
<br><br>
<input id="signUpButton" type="submit" value="Log In" onclick="return signUpValidation()">
</form>
<p id="errorMessage" style="color:red"></p> <!--paragraph where error message will appear as neccesary*/-->
</div>
<div class="footer">
(C) 2021 Mason Ireland Number1Tech.com 
</div>
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
		var xusername = document.forms["signUpForm"]["username"].value; /* declarations of the values from the text boxes */
		var xchoosePassword = document.forms["signUpForm"]["choosePassword"].value;
		
		if (xusername == null || xusername == ""){ //checking for a correctly inputted username
			document.getElementById("errorMessage").innerHTML = "No username entered!";
			return false;
		}
		
		if (xchoosePassword.length < 8) { //checking for a correctly inputted password
			document.getElementById("errorMessage").innerHTML = "Password must be longer than 8 characters!";
			return false;
		}
		
		else{ //form passes validation checking 
			
		}
		
	}
</script>