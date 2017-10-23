<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>UTS</title>

		<link rel="stylesheet" href="assets/pure-min.css">
		<link rel="stylesheet" href="assets/baby-blue.css">

	</head>

	<body>
		<div id="layout">
			<a href="#menu" id="menuLink" class="menu-link"> <span></span> </a>

			<div id="menu">
				<div class="pure-menu pure-menu-open">
					<a class="pure-menu-heading" href="/">Menu</a>

					<ul>

						<li class=" ">
							<a href="home.php" target="konten">Home</a>
						</li>
						<li class=" ">
							<a href="produk.php" target="konten">Profil</a>
						</li>
						<li class=" ">
							<a href="www.bbc.com/indonesia/dunia">Berita</a>
						</li>
						<li class=" ">
							<a href="index.php">Hiburan</a>
						</li>
						<li class=" ">
							<a href="www.bbc.com/indonesia/Olahraga">Olahraga</a>
						</li>

					</ul>

					<ul>
					<li>

					<h3 align="center">
					HIT COUNTER<br>
						<?php
						include "hit_counter.php";
						?>
						</h3>
					</li>

					</ul>

				</div>
			</div><!--div menu -->
<!--- Content -->
			<div id="main">

				<div class="header">
					<h2>Welcome To HomePage UTS</h2>

					<h3>Sri Ayu Hidayati_41815010126</h3>

				</div>
				<div class="content" > 
				<IFRAME name="konten" id="konten" border="20" width="1024px" height="400px" frameborder="100%" scrolling=yes>  </IFRAME> 
				
				</div>

				<!---FOOOOOOOOOOOOOOOOOOOOOTER-->
				<div class="footer">
					<div class="legal pure-g">
				
						<div class="pure-u-1 pure-u-sm-15-24">

							
						<p align="right">
								&copy; 2017 Sri Ayu Hidayati All rights reserved.
							</p>
						</div>
					</div>

				</div>
			</div><!-- div main -->
		</div>
		<!--div layout -->

	</body>
</html>
