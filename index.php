<?php
session_start();

	if (!$_SESSION["language"]) {
			require("languages/tr.php");
	}else {
		require("languages/".$_SESSION["language"].".php");
	}
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION["language"];?>">
<head>
	<title>Filtre Donanim Hosting</title>
	<title><?php echo $language["title"]; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $language["htmldescription"]; ?>">
	<meta name="keywords" content="<?php echo $language["htmlkeywords"]?>">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>



</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
 <?php 
 include 'header.php';
 include 'hero.php';
 include 'features.php';
 include 'letest.php';
 ?>	



	
    

	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="img/banner-bg.jpg">
				<div class="tag-new"><?php echo $language["textnew"]?></div>
				<span><?php echo $language["textnewarrivals"]?></span>
				<h2><?php echo $language["textproductname5"]?></h2>
				<a href="#" class="site-btn"><?php echo $language["textshopnow"]?></a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->


	<?php
	include 'footer.php';
	?>


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
