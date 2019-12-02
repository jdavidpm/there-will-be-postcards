<?php
	session_start();
	if(!isset($_SESSION["iduser"]))
	{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>There Will Be Postcards - Send e-postcards to your friends!</title>
	
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Cinzel|Josefin+Sans|Liu+Jian+Mao+Cao|Permanent+Marker|Righteous|Staatliches|ZCOOL+XiaoWei&display=swap" rel="stylesheet">
	<link href="fontawesome/css/all.min.css" rel="stylesheet">
	

</head>
<body class="greyish">
	<header>
		<nav class="greyish" role="navigation">
			<a id="logo-container" href="index.php" class="brand-logo bluec-text pmarker" style="padding-left: 25mm">TWBP</a>
			<div class="nav-wrapper container">
				<ul class="right hide-on-med-and-down">
					<!--<li>
						<div class="col s12 righteous">      
							<div class="input-field col s12">
								<i class="material-icons prefix">search</i>
								<input type="text" id="autocomplete-input" class="autocomplete">
								<label for="autocomplete-input" >Search</label>
							</div>
						</div>
					</li>-->
					<li><a href="pages/gallery.php" class="white-text righteous"><i class="material-icons left bluec-text">view_module</i>Gallery</a></li>
					<li><a href="pages/login.php" class="white-text righteous"><i class="material-icons left bluec-text">forward</i>Log In</a></li>
				</ul>
				  
				<ul id="nav-mobile" class="sidenav greyish">
					<li><a href="pages/gallery.php" class="white-text righteous"><i class="material-icons left bluec-text">view_module</i>Gallery</a></li>
					<li><a href="pages/login.php" class="white-text righteous"><i class="material-icons left bluec-text">forward</i>Log In</a></li>
				</ul>
				<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="bluec-text material-icons">menu</i></a>
			</div>
		</nav>
	</header>
	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container hide-on-med-and-down">
				<h5><br><br><br><br></h5>
				<h2 class="header center bluec-text pmarker"><br>There Will Be Postcards!!!</h2>
				<div class="row center">
					<h5 class="header col s12 staat greyish-text">Send electronic postcards anytime you want to anyone you know<br></h5>
				</div>
				<div class="row center">
					<a href="pages/gallery.php" id="toGallery" class="btn-large waves-effect waves-dark bluec righteous">Every Postcard</a>
					<a href="pages/gallery.php#most" id="toGallery" class="btn-large waves-effect waves-dark bluec righteous">Most Beloved</a>
				</div>
				<h5><br><br><br><br><br><br><br><br><br><br><br><br></h5>
			</div>
			<div class="hide-on-large-only">
					<h2 class="center bluec-text pmarker"><br>There Will Be Postcards!!!</h2>
					<div class="row center">
						<h6 class="header col s12 staat greyish-text">Send electronic postcards anytime you want to anyone you know<br></h6>
					</div>
					<div class="row center">
						<a href="pages/gallery.php" id="toGallery" class="btn-large waves-effect waves-dark bluec righteous">Every Postcard</a>
						<a href="pages/gallery.php" id="toGallery" class="btn-large waves-effect waves-dark bluec righteous">Most Beloved</a>
					</div>
				</div>
		</div>
		<div class="parallax"><img src="images/bg/background.jpg" alt="Unsplashed background img 1"></div>
	</div>

	<div class="white-text">
			<div class="carousel carousel-slider center">
					<div class="carousel-fixed-item center"><a class="waves-effect white grey-text darken-text-2"></a></div>
					<div class="carousel-item transparentish-text white-text" href="#one!">
						<h3>The Most Beloved <i class="fas fa-heart red-text"></i></h3>
						<div id="mostBeloved"></div>
					</div>
					<div class="carousel-item transparentish-text white-text" href="#two!">
						<h3>The Most Recent <i class="fas fa-sync green-text"></i></h3>
						<div id="mostRecent"></div>
					</div>
					<div class="carousel-item transparentish-text white-text" href="#three!">
						<h3>Our Recommendation <i class="fas fa-user-friends blueb-text"></i></h3>
						<div id="ourRecommend"></div>
					</div>
				</div>
	</div>

	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<h3 class="header col s12 staat greyish-text">Send signed postcards to all your friends!</h3>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="images/bg/background2b.jpg" alt="Unsplashed background img 2"></div>
	</div>

	<footer class="page-footer bluec">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h4 class="greyish-text staat">About us</h4>
						<p class="grey-text text-lighten-4 josefin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis leo arcu, id efficitur quam efficitur ut. Vestibulum pellentesque feugiat rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi nibh ex, sodales in dui sit amet, imperdiet feugiat mauris.</p>
				</div>
				<div class="col l3 s12">
					<h4 class="greyish-text staat">Quick Access</h4>
					<ul>
						<li><i class="fas fa-heart white-text fa-lg fa-pull-left"></i><a class="greyish-text righteous" href="#!">Most Beloved</a></li>
						<li><i class="fas fa-sync white-text fa-lg fa-pull-left"></i><a class="greyish-text righteous" href="#!">Most Recent </a></li>
						<li><i class="fas fa-user-friends white-text fa-lg fa-pull-left"></i><a class="greyish-text righteous" href="#!">Our Recommendation</a></li>
					</ul>
				</div>
				<div class="col l3 s12">
					<h4 class="greyish-text staat">Social</h4>
					<ul>
						<li><a class="greyish-text" href="http://facebook.com" target="_blank"><h5 class="righteous"><i class="white-text fab fa-facebook-square fa-lg fa-pull-left"></i>Facebook</a></h5></li>
						<li><a class="greyish-text" href="http://twitter.com" target="_blank"><h5 class="righteous"><i class="white-text fab fa-twitter-square  fa-lg fa-pull-left"></i>Twitter</a></h5></li>
						<li><a class="greyish-text" href="http://instagram.com" target="_blank"><h5 class="righteous"><i class="white-text fab fa-instagram fa-lg fa-pull-left"></i>Instagram</a></h5></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright blueb">
			<div class="container righteous">
				Made by <a class="greyish-text text-lighten-3 pmarker" href="signup.php">Rye Catchers Inc.</a>
			</div>
		</div>
	</footer>
	<!--  Scripts-->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	<script src="js/init.js"></script>
	<script src="fontawesome/js/all.min.js"></script>
  </body>
</html>
<?php
	}
	else
	{
        header("location: indexLogged.php");
	}
?>