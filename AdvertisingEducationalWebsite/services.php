<?php
 include "multilanguage/config.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lebanese Educational Services</title>
    <link rel="stylesheet" href="css/cssfile.css">
    
	
	<link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
  <link
	href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
	rel="stylesheet"
  />
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
<body style="height: 2000px;">



<header lang="en">
		<div id="logo"><img src="images/logo.ico"></div>
		<span class="sign active"><a  href="index.php"><?php echo $lang['home'] ?></a></span>
		<span class="sign"><a class="act active" href="services.php"><?php echo $lang['services'] ?></a></span>
        <span class="sign"><a href="aboutus.php"><?php echo $lang['aboutus'] ?></a></span>
	</header>
    <!-- Main site -->
    <div class="slider">
		<!-- fade css -->
		<div class="myslide fade">
			<img class="image" src="images/img1.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<img class="image" src="images/img3.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<img class="image" src="images/img2.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<img class="image" src="images/img4.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<img class="image" src="images/img5.jpg" style="width: 100%; height: 100%;">
		</div>
		<!-- /fade css -->
		
		<!-- onclick js -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			<span class="dot" onclick="currentSlide(5)"></span>
		</div>
		<!-- /onclick js -->
	</div>

<!--main-->

<section>
	<div class="row">
	  <h2 lang="en" class="section-heading"><?php echo $lang['ourservices'] ?></h2>
	</div>
	<div class="row">
	  <div class="column">
		<div class="card">
		  <div class="icon-wrapper">
			<i class="fas fa-wrench"></i>
		  </div>

		  <h3 lang="en"><?php echo $lang['services'] ?></h3>
		  <p lang="en" class="txtservice">
          <?php echo $lang['servicesdefparagraph'] ?>
		  </p>

		</div>
	  </div>
	  <div class="column">
		<div class="card">
		  <div class="icon-wrapper">
			<i class="fa-solid fa-book-open"></i>
		  </div>

		  <h3 lang="en"><?php echo $lang['abilityknowledge'] ?></h3>
		  <p lang="en" class="txtservice">
          <?php echo $lang['abilityknowledgedefparagraph'] ?> 
		  </p>

		</div>
	  </div>
	  <div class="column">
		<div class="card">
		  <div class="icon-wrapper">
			<i class="fa-sharp fa-solid fa-graduation-cap"></i>
		  </div>

		  <h3 lang="en"><?php echo $lang['vocationaltraining'] ?></h3>
		  <p lang="en" class="txtservice">
          <?php echo $lang['vocationaltrainingdefparagraph'] ?>
		  </p>

		</div>
	  </div>
	 </div>
  </section>
    <!--footer-->
    <footer class="footer-distributed">

<div class="footer-left">
    <h3><span id="footertag">Lebanese</span><br>Educational Services</h3>

	<p class="footer-links" lang="en">
                <a href="index.php"><?php echo $lang['home'] ?></a>
                |
                <a href="services.php"><?php echo $lang['services'] ?></a>
                |
                <a href="aboutus.php"><?php echo $lang['aboutus'] ?></a>

            </p>

    
    <p class="footer-company-name">Copyright © 2023 <strong>Hussien</strong> All rights reserved</p>
</div>

<div class="footer-center">
    <div lang="en">
        <i class="fa-solid fa-location-dot"></i>
        <p><span><?php echo $lang['sulaymaniyah'] ?></span>
        <?php echo $lang['iraq'] ?></p>
    </div>

    <div>
        <i class="fa-solid fa-phone"></i>
        <p>+964 772 532 3839</p>
    </div>
    <div>
        <i class="fa-solid fa-envelope"></i>
        <p><a href="mailto:sagar00001.co@gmail.com">xyz@gmail.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about" lang="en">
        <span><?php echo $lang['aboutcenter'] ?></span>
        <strong>Lebanese Educational Services</strong><?php echo $lang['paragraphdefcenter'] ?> 
    </p>
    

    <div class="footer-icons">
        <p class="footer-company-about" lang="en"><?php echo $lang['staysocialmedia'] ?></p>
        <a href="https://www.facebook.com/profile.php?id=100090677556572" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/leseducational/?igshid=ZDdkNTZiNTM%3D" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <!--<a href="#"><i class="fa fa-linkedin"></i></a>-->
        
    </div>
    <a class="languages" href="services.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    <span style="color:aliceblue"> | </span><a class="languages" href="services.php?lang=kr"><?php echo $lang['lang_kr'] ?></a>
</div>
</footer>
<script src="js/jsfile.js"></script>

</body>
</html>


