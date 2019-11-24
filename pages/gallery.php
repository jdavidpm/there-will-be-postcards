<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>There Will Be Postcards - Send e-postcards to your friends!</title>
	
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Cinzel|Josefin+Sans|Liu+Jian+Mao+Cao|Permanent+Marker|Righteous|Staatliches|ZCOOL+XiaoWei&display=swap" rel="stylesheet">
	<link href="../fontawesome/css/all.min.css" rel="stylesheet">

</head>
<body class="white">
	<header>
		<nav class="greyish" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="../index.html" class="brand-logo bluec-text pmarker">TWBP</a>
				<ul class="right hide-on-med-and-down">
						<li>
							<div class="col s12 righteous">      
								<div class="input-field col s12">
									<i class="material-icons prefix">search</i>
									<input type="text" id="autocomplete-input" class="autocomplete">
									<label for="autocomplete-input" >Search</label>
								</div>
							</div>
						</li>
						<li><a href="gallery.php" class="white-text righteous"><i class="material-icons left bluec-text">view_module</i>Gallery</a></li>
						<li><a href="login.php" class="white-text righteous"><i class="material-icons left bluec-text">forward</i>Log In</a></li>
					  </ul>
				  
				<ul id="nav-mobile" class="sidenav greyish">
					<li><a href="gallery.php" class="white-text righteous"><i class="material-icons left bluec-text">view_module</i>Gallery</a></li>
					<li><a href="login.php" class="white-text righteous"><i class="material-icons left bluec-text">forward</i>Log In</a></li>
				</ul>
				<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="bluec-text material-icons">menu</i></a>
			</div>
		</nav>
	</header>

	<main class="center-align">
		<div id="switchFilter" class="row transparentish">
			<div class="row">
				<br>
				<div class="col s6 l3 switch">
					<label>
						<h5>Christmas</h5>
						<input type="checkbox">
						<span class="lever"></span>
					</label>
				</div>
				<div class="col s6 l3 switch">
					<label>
						<h5>Birthdays</h5>
						<input type="checkbox">
						<span class="lever"></span>
					</label>
				</div>
				<div class="col s6 l3 switch">
					<label>
						<h5>Valentine's Day</h5>
						<input type="checkbox">
						<span class="lever"></span>
					</label>
				</div>
				<div class="col s6 l3 switch">
					<label>
						<h5>Miscellaneous</h5>
						<input type="checkbox">
						<span class="lever"></span>
					</label>
				</div>
			</div>
			<div class="row center-align">
				<div class="col s12 l12 switch">
					<label>
						<h5>All</h5>
						<input type="checkbox">
						<span class="lever"></span>
					</label>
				</div>
			</div>
		</div>
		<div id="postcardItems" class="row">
			<div id="rowItems" class="row">
				<div id="itemPostcard" class="col s12 m12 l6">
					<div class="card">
						<div class="card-image">
							<img class="materialboxed" src="../postcards/p1.jpg">
							<span class="card-title staat">Before the Devil Knows You're Dead</span>
							<a href="send.php" class="btn-floating halfway-fab waves-effect waves-light bluec" title="Send"><i class="fas fa-paper-plane"></i></a>
						</div>
						<div class="card-content greyish">
							<p class="white-text josefin">I am a very simple card.</p>
							<a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a>
						</div>
					</div>
				</div>
				<div id="itemPostcard" class="col s12 m12 l6">
					<div class="card">
						<div class="card-image">
							<img class="materialboxed" src="../postcards/p5.jpg">
							<span class="card-title staat">The Irishman</span>
							<a class="btn-floating halfway-fab waves-effect waves-light bluec" title="Send"><i class="fas fa-paper-plane"></i></a>
						</div>
						<div class="card-content greyish">
							<p class="white-text josefin">I am a very simple card. </p>
							<a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a>
						</div>
					</div>
				</div>
			</div>
			<div id="rowItems" class="row">
				<div id="itemPostcard" class="col s12 m12 l6">
					<div class="card">
						<div class="card-image">
							<img class="materialboxed" src="../postcards/p6.jpg">
							<span class="card-title staat">Quien Te Cantará</span>
							<a class="btn-floating halfway-fab waves-effect waves-light bluec" title="Send"><i class="fas fa-paper-plane"></i></a>
						</div>
						<div class="card-content greyish">
							<p class="white-text josefin">I am a very simple card.</p>
							<a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a>
						</div>
					</div>
				</div>
				<div id="itemPostcard" class="col s12 m12 l6">
					<div class="card">
						<div class="card-image">
							<img class="materialboxed" src="../postcards/p7.jpg">
							<span class="card-title staat">The Sisters Brothers</span>
							<a class="btn-floating halfway-fab waves-effect waves-light bluec" title="Send"><i class="fas fa-paper-plane"></i></a>
						</div>
						<div class="card-content greyish">
							<p class="white-text josefin">I am a very simple card. </p>
							<a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a>
						</div>
					</div>
				</div>
			</div>
			<div id="rowItems" class="row">
				<div id="itemPostcard" class="col s12 m12 l6">
					<div class="card">
						<div class="card-image">
							<img class="materialboxed" src="../postcards/p8.jpg">
							<span class="card-title staat">The Favourite</span>
							<a class="btn-floating halfway-fab waves-effect waves-light bluec" title="Send"><i class="fas fa-paper-plane"></i></a>
						</div>
						<div class="card-content greyish">
							<p class="white-text josefin">I am a very simple card.</p>
							<a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a>
						</div>
					</div>
				</div>
				<div id="itemPostcard" class="col s12 m12 l6">
					<div class="card">
						<div class="card-image">
							<img class="materialboxed" src="../postcards/p9.jpg">
							<span class="card-title staat">A Serious Man</span>
							<a class="btn-floating halfway-fab waves-effect waves-light bluec" title="Send"><i class="fas fa-paper-plane"></i></a>
						</div>
						<div class="card-content greyish">
							<p class="white-text josefin">I am a very simple card. </p>
							<a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a><a href="#!" class="chip">cat</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer class="page-footer bluec">
		<div class="footer-copyright blueb">
			<div class="container righteous">
				Made by <a class="greyish-text text-lighten-3 pmarker" href="http://materializecss.com">Rye Catchers Inc.</a>
			</div>
		</div>
	</footer>
	<!--  Scripts-->
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	<script src="../js/init.js"></script>
	<script src="../fontawesome/js/all.min.js"></script>
  </body>
</html>