<!DOCTYPE html>
<html>
<title><?php pageTitle(); ?> | <?php siteName(); ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="content/css/main.css">
<link rel="stylesheet" href="content/css/sbuttons.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="http://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<script>
var height = $('.content').height()
$('.sidebar').height(height)
</script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #fff;
    line-height: 1.8;
}
   
.darkg {background-color:#282828}
   
.hidden{
   visibility: hidden
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url("content/img/bg.jpg");
    min-height: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.bgimg-2 {
    background-image: url("content/img/bg.jpg");
    min-height: 30%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.bgimg-3 {
    background-image: url("content/img/topkart.jpg");
    min-height: 60%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.flashyellow{
    -webkit-animation: color-change 1s infinite;
    -moz-animation: color-change 1s infinite;
    -o-animation: color-change 1s infinite;
    -ms-animation: color-change 1s infinite;
    animation: color-change 1s infinite;
}

@-webkit-keyframes color-change {
    0% { color: #d8cd00; }
    50% { color: black; }
    100% { color: #d8cd00; }
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .site-footer {
        background-attachment: scroll;
    }
}
</style>
<body>
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fas fa-bars"></i>
    </a>
    <a href="http://69.174.154.177" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-home"></i></a>
    <a href="http://69.174.154.177/about" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-info-circle"></i> ABOUT</a>
    <a href="http://69.174.154.177/employment" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-edit"></i> EMPLOYMENT</a>
	<a href="http://69.174.154.177/announcements" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-bullhorn"></i> ANNOUNCEMENTS</a>
    <a href="http://69.174.154.177/programs" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-tasks"></i> PROGRAMS</a>
    <a href="http://69.174.154.177/docs" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-file"></i> RESOURCES</a>
    <a href="http://69.174.154.177/contact" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-question-circle"></i> CONTACT</a>	
  </div>
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="http://69.174.154.177/" class="w3-bar-item w3-button" onclick="toggleFunction()">HOME</a>
    <a href="http://69.174.154.177/about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="http://69.174.154.177/contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>

<?php pageContent(); ?> 

<!-- Footer -->
<footer class="w3-center w3-container w3-padding-16 darkg w3-xlarge">
<div class="w3-text-white w3-content w3-left-align">
    <img src="content/img/logo.png" height="200px" width="200px">
	<div class="w3-padding-16">
    <h5><i class="fas fa-map-marker-alt"></i> Address:</h5><h5 class="w3-text-grey">901 W. US 50, Versailles, Indiana 47042</h5>
	</div>
	<div class="w3-padding-16">
    <h5><i class="fas fa-phone"></i> Phone:</h5><h5 class="w3-text-grey">(812)-689-5253</h5>
	</div>
	<div class="w3-padding-16">
    <h5><i class="fas fa-fax"></i> Fax:</h5><h5 class="w3-text-grey">(812)-689-6977</h5>
	</div>
</div>  
<div class="w3-padding-8">
  <a href="https://www.facebook.com/southeasterncareercenter.scc/" class="w3-xlarge w3-bar-item w3-button w3-hide-small"><i class="w3-xlarge w3-text-white fab fa-facebook w3-hover-opacity"></i></a>
  <a href="https://www.instagram.com/southeasterncareercenter/" class="w3-xlarge w3-bar-item w3-button w3-hide-small"><i class="w3-xlarge w3-text-white fab fa-instagram w3-hover-opacity"></i></a>
  <a href="https://www.twitter.com/scareercenter" class="w3-xlarge w3-bar-item w3-button w3-hide-small"><i class="w3-xlarge w3-text-white fab fa-twitter w3-hover-opacity"></i></a>
</div>
    <h5 class="w3-small w3-text-grey">Created By: Kyle Corum & Micah Wilhelm</h5>
</footer>
    
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</body>