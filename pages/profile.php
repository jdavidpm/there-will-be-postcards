<?php
	session_start();
	if(isset($_SESSION["iduser"]))
	{
       	 include("getInfoUser.php");
?>
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
<body class="transparentish">
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
                        <li><a href="profile.php" class="white-text righteous"><i class="material-icons left bluec-text">account_circle</i>Profile</a></li>
						<li><a href="logout.php?nombreSesion=iduser" class="white-text righteous"><i class="material-icons left bluec-text">close</i>Log Out</a></li>
					  </ul>
				<ul id="nav-mobile" class="sidenav greyish">
					<li><a href="gallery.php" class="white-text righteous"><i class="material-icons left bluec-text">view_module</i>Gallery</a></li>
					<li><a href="logout.php?nombreSesion=iduser" class="white-text righteous"><i class="material-icons left bluec-text">forward</i>Log Out</a></li>
				</ul>
				<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="bluec-text material-icons">menu</i></a>
			</div>
		</nav>
	</header>

	<main class="center-align">
		<div id ="panelProfile" class="row" style="margin: 5% 5% 5% 5%;">
			<div id="recentlyReceived"class="col s2 m2 l2 card-panel">
				<h5 class="staat">Recently Received</h5>
				<div class="divider"></div>
				<h4 class="staat"></h4>
			</div>
			<div class="col s1 m1 l1" ></div>
			<div id="profileCard" class="col s6 m6 l6 card-panel" >
				<h3 class="staat"><?php echo "$infoUser[1] $infoUser[2]";?></h3>
				<img src=<?php echo "$profilePic";?> class="circle hoverable responsive-img" width="250px" style="margin: 5% 0% 5% 0%;">
				<div class="divider"></div>
				<div class="row josefin">
				<ul>
					<li><div class="col push-l1 s10 m10 l10 left-align"><h5 class="grey-text"><span class="black-text">Gender:</span><?php echo " $infoUser[5]";?></h5></div></li>
					<li><div class="col push-l1 s10 m10 l10 left-align"><h5 class="grey-text"><span class="black-text">Birthdate:</span><?php echo " $infoUser[6]";?></h5></div></li>
					<li><div class="col push-l1 s10 m10 l10 left-align"><h5 class="grey-text"><span class="black-text">Mail:</span><?php echo " $infoUser[3]";?></h5></div></li>
				</ul>
				</div>
			</div>
			<div class="col s1 m1 l1" ></div>
			<div id="recentlySent" class="col s2 m2 l2 card-panel">
				<h5 class="staat">Recently Sent</h5>
				<div class="divider"></div>
				<h4 class="staat"></h4>
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
	<script src="../js/profile.js"></script>
  </body>
</html>
<?php
	}
	else
	{
        header("location:./../");
	}
?>