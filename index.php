<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title> Home Page - Year of Stories</title> 
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
<div class="content"> <!-- all content below the appears within this div*/-->
</div>
<!-- Slide-show --> <!-- hyperlink tag allowing slideshow elements to be clicked on */-->
<img id ="slideshow" src="slideshow/slide 1.png" alt="Slideshow showing images related to Read on Nottingham">


<!-- Introduction to the website -->

<h1 class="title"> Welcome to the Year of Stories 2023! </h1>
<section class="about" id="about">
  <div class="text">
      <div class="aboutContent">
          <p>Helping organisations understand the importance of educational and we're offering both free specialised training opportunities, targeted interventions and a wide range of programmes and resources to equip you with the best strategies and tools for enabling children to build on the skills they have, move forward from recent challenges and catch-up on learning.
          We wish that through these activities improve literacy levels amongst young people, share the joy of reading for pleasure and widen participation in cultural storytelling, poetry and literature events.</p>
      </div>
  </div>
</section>

<!-- Buttons -->
<section class="campus">
  <div class="row">

    <div class="campus-col">
      <img src="img/activities.jpg" target="_blank" >
      <div class="layer">
        <a href="activities.php"target="_blank"><h3>Activities</h3></a>
      </div>
    </div>

    <div class="campus-col">
      <img src="img/explore.jpg" >
      <div class="layer">
        <a href="exploreUs.php" target="_blank" ><h3>Explore Us</h3></a>      
      </div>
    </div>

    <div class="campus-col">
      <img src="img/partners.jpg" >
      <div class="layer">
        <a href="partners.php" target="_blank"><h3>Our partners</h3></a>    
      </div>
    </div>

  </div>
</section>


<!-- Footer -->
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
		
		var index = 1;
		var overidden = false; //boolean controlling 
	
		
		var imgNumbers = [   //object storing slideshow image numbers, text captions and clickable links 
							{
								imageNumber: 1,
								altText: "Image of iPad available for £649",
								caption: "Image of iPad offer, image taken from apple.co.uk",
								link: "Tablets Page.html"
							},
							{	imageNumber: 2,
								altText: "Image of Predator Orion 3000, available for £1399",
								caption: "Image of Predator PC offer, image taken from acer.com",
								link: "Desktops Page.html"
							},
							{	imageNumber: 3,
								altText: "Image of Dell XPS 13, available for £799",
								caption: "Image of Dell XPS 13 laptop offer, image taken from dell.com",
								link: "Laptops Page.html"
							},
							{ 	imageNumber: 4,
								altText: "Image of ThinkPad X1 Fold, available for £2499",
								caption: "Image of ThinkPad X1 Fold offer, image taken from lenovo.com",
								link: "Laptops Page.html"
							},
							{	imageNumber: 5,
								altText: "Image of Kurio Tab Connect, available for £149",
								caption: "Image of Kurio Tab Connect offer, image taken from kurioworld.com",
								link: "Tablets Page.html"
							},
						];
						
	window.onload = function autoMoveSlide() {  //function that automatically moves slideshow slides
	var slideTimer = setTimeout(moveSlide,5000);
	console.log(slideTimer);
		function moveSlide(){
			if (index !== imgNumbers.length && overidden == false){
				var img = document.getElementById("slideshow");
				console.log(index);
				var selectSlide = "slideshow/slide " + imgNumbers[index].imageNumber + ".png";
				img.src = selectSlide;
				document.getElementById("slideshow").alt = imgNumbers[index].altText;
				console.log(imgNumbers[index].altText);
				index++;
			}
			if (index == imgNumbers.length && overidden == false){ //once the end of the object is reached the index is reset and the function is ran again
			index = 0;
			autoMoveSlide();
			
			if (overidden == true){
			}
			
			}
			else {
			setTimeout(moveSlide,5000);
			}
		}
	}
	
	function moveToNextSlide() {  //function to move to next slide
		if (index >=imgNumbers.length - 1){
			index--;
		}
	var img = document.getElementById("slideshow");
	index++;
	var selectSlide = "slideshow/slide " + imgNumbers[index].imageNumber + ".png";
	img.src = selectSlide;
	document.getElementById("slideshow").alt = imgNumbers[index].altText;
	console.log(imgNumbers[index].altText);
	overidden = true;
	
	}
	
	function moveToPreviousSlide() { //function to move to previous slide
		if (index <=0) {
		index++
		}
	var img = document.getElementById("slideshow");
	index--;
	var selectSlide = "slideshow/slide " + imgNumbers[index].imageNumber + ".png";
	img.src = selectSlide;
	document.getElementById("slideshow").alt = imgNumbers[index].altText;
	document.getElementById("fig1").innerHTML = imgNumbers[index].caption;
	console.log(imgNumbers[index].altText);
	overidden = true;
	}
</script>
</html>
