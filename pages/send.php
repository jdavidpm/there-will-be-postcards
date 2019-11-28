<?php
	session_start();
    $tmp = $_REQUEST["postToSend"];
    $tmp = "../postcards/p".$tmp.".jpg";
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
    <link href="../js/confirm/dist/jquery-confirm.min.css" rel="stylesheet">
</head>
<body class="transparentish">
	<header>
		<nav class="greyish" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="../index.php" class="brand-logo bluec-text pmarker">TWBP</a>
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
					<li><a href="profile.php" class="white-text righteous"><i class="material-icons left bluec-text">account_circle</i>Profile</a></li>
                    <li><a href="logout.php?nombreSesion=iduser" class="white-text righteous"><i class="material-icons left bluec-text">close</i>Log Out</a></li>
				</ul>
				<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="bluec-text material-icons">menu</i></a>
			</div>
		</nav>
    </header>
    <main class="center-align">
        <div id="panelSend">
            <div id="imageTitle"class="row" style="margin-top: 5%; margin-bottom: 5%;"> 
                <div class="col s6 offset-s3 card-panel greyish white-text">
                    <span class="flow-text">
                            <h2 class="staat">Send this postcard!</h2>
                            <img src=<?php echo $tmp;?> width="900px" class="responsive-img">
                    </span>
                    <div id="buttonsPanel">
                        <div class="row">
                            <form id="dataEmail" action=<?php echo "sendEmail.php?postToSend=".$_REQUEST["postToSend"];?> method="post">
                            <div class="input-field col s6 josefin">
                                <input class="validate white-text" id="email" type="text" name="email" data-validetta="required,email">
                                <label for="email" >To (email)</label>
                            </div>
                            <div class="input-field col s6 josefin">
                                <input class="validate white-text" id="sign" type="text" name="sign">
                                <label for="sign">Sign it!</label>
                            </div>
                            <input class="btn bluec righteous" type="submit" value="SEND">
                            <button type="submit" class="btn bluec righteous waves-effect waves-ligh" formaction="getPDF.php"> Download</button>
                            </form>
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
    <script src="../js/validetta/dist/validetta.min.js"></script>
    <script src="../js/confirm/dist/jquery-confirm.min.js"></script>
    <script type="text/javascript">$(document).ready(function(){$("#dataEmail").validetta({});});</script>
  </body>
</html>
<?php
	}
	else
	{
        header("location:./login.php");
	}
?>