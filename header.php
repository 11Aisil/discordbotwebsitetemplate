<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.php" class="site-logo">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="<?php echo $language["textsearchon"]; ?>">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#"><?php echo $language["textsignin"]; ?> </a><?php echo $language["textor"]; ?> <a href="#"><?php echo $language["textcreateaccount"]; ?></a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span class="shopitem">0</span>
								</div>
								<a href="#"><?php echo $language["textshoppingcart"]; ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="#"><?php echo $language["texthome"]; ?></a></li>
					<li><a href="#"><?php echo $language["textwomen"]; ?></a></li>
					<li><a href="#"><?php echo $language["textmen"]; ?></a></li>
					<li><a href="#"><?php echo $language["textjevelry"]; ?>
						<span class="new"><?php echo $language["textnew"]; ?></span>
					</a></li>
					<li><a href="#"><?php echo $language["textshoes"]; ?></a>
						<ul class="sub-menu">
							<li><a href="#"><?php echo $language["textsneakers"]; ?></a></li>
							<li><a href="#"><?php echo $language["textsandals"]; ?></a></li>
							<li><a href="#"><?php echo $language["textformalshoes"]; ?></a></li>
							<li><a href="#"><?php echo $language["textboots"]; ?></a></li>
							<li><a href="#"><?php echo $language["textflipflops"]; ?></a></li>
						</ul>
					</li>
					<li><a href="#"><?php echo $language["textpages"]; ?></a>
						<ul class="sub-menu">
							<li><a href="./index.php"><?php echo $language["textproductpage"]; ?></a></li>
							<li><a href="./index.php"><?php echo $language["textcategorypage"]; ?></a></li>
							<li><a href="./index.php"><?php echo $language["textcartpage"]; ?></a></li>
						</ul>
					</li>
					<li style="margin-left: 250px"><a href="#"><?php echo $language["textlanguageoptions"]; ?></a>
						<ul class="sub-menu">
							<li><a href="./language.php?language=tr"><?php echo $language["textturkish"]; ?></a></li>
							<li><a href="./language.php?language=en"><?php echo $language["textenglish"]; ?></a></li>
							<li><a href="./index.php"><?php echo $language["textwrong"]; ?></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
