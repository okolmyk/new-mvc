<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная страница</title>
</head>
<body>

<h1>Главная страница</h1>

<div class="slideshow-container">
<?php
foreach ($data as $key => $value) {
?>
   <div class="mySlides fade">
     <a href="<?= $value['url'] ?>"><img class="myslidpoto" src="<?= $value['pictures'] ?>"></a>
     <div class="text"><?= $value['name'] ?></div>
   </div>

<?php
}
?>
   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
   <a class="next" onclick="plusSlides(1)">&#10095;</a>
 </div>
<br>

 <div class="dot-container">
<?php
    foreach ($data as $key => $value) {
?>
    <span class="dot" onclick="currentSlide(<?= $key + 1; ?>)"></span>
<?php
   }
?>

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
  var dots = document.getElementsByClassName("dot");
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
}

</script>

</body>
</html>
