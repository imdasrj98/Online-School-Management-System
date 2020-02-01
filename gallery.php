<?php
        require_once("allmenu.html");
        ?>

<html>
<head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <!--viewport is added to make the website responsive for mobiles-->
        <meta name="keywords" content="HTML,CSS,PHP">
        <meta name="author" content="DGS PUBLIC SCHOOL">
        <meta name="description" content="Best schools in India">

<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
</head>
<body bgcolor="pink">

<h2 style="text-align:center">Slideshow Gallery</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="./Images/1.jfif" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="./Images/2.jfif" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="./Images/3.jfif" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="./Images/4.jfif" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="./Images/5.jfif" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="./Images/6.jfif" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="./Images/1.jfif" style="width:100%" onclick="currentSlide(1)" alt="Juniors Classroom">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/2.jfif" style="width:100%" onclick="currentSlide(2)" alt="Seniors Classroom">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/3.jfif" style="width:100%" onclick="currentSlide(3)" alt="School Bus">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/4.jfif" style="width:100%" onclick="currentSlide(4)" alt="Students">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/5.jfif" style="width:100%" onclick="currentSlide(5)" alt="Playground">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/6.jfif" style="width:100%" onclick="currentSlide(6)" alt="Swimming Pool">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>
