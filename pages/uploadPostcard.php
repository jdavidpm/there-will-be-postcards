<?php
	session_start();
	if(isset($_SESSION["iduser"]))
	{
		include("getInfoUser.php");
	}
	else
	{
        header("location: login.php");
	}
	if (mysqli_num_rows($resinfoAsAdmi) == 1)
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
						<!--<li>
                            <div class="col s12 righteous">      
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">search</i>
                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                    <label for="autocomplete-input" >Search</label>
                                </div>
                            </div>
                        </li>-->
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
        <form id="postcardForm" autocomplete="off" style="margin: 0% 20% 0% 20%;">
            <div class="row josefin card-panel">
                <div class="col l12 s12 m6 input-field">
                    <input class="validate" id="postcardName" type="text" name="postcardName" data-validetta="required">
                    <label for="postcardName" data-error="wrong" data-success="right"><i class="fas fa-envelope fa-lg fa-pull-left"></i>POSTCARD NAME</label>
                </div>
                <div class="col l3 s6 m6 input-field">
                    <h6 class="grey-text"><i class="fas fa-bars fa-lg fa-pull-left"></i>CATEGORY</h6>
                    <select name="category1">
                        <option value="0" disabled selected>Choose category</option>
                        <option value="1">Christmas</option>
                        <option value="2">Birthdays</option>
                        <option value="3">Valentines</option>
                        <option value="4">Miscellaneous</option>
                    </select> 
                </div>
                <div class="col l3 s6 m6 input-field">
                    <h6 class="grey-text"><i class="fas fa-bars fa-lg fa-pull-left"></i>CATEGORY</h6>
                    <select name="category2">
                        <option value="0" disabled selected>Choose category</option>
                        <option value="1">Christmas</option>
                        <option value="2">Birthdays</option>
                        <option value="3">Valentines</option>
                        <option value="4">Miscellaneous</option>
                    </select> 
                </div>
                <div class="col l3 s6 m6 input-field">
                    <h6 class="grey-text"><i class="fas fa-bars fa-lg fa-pull-left"></i>CATEGORY</h6>
                    <select name="category3">
                        <option value="0" disabled selected>Choose category</option>
                        <option value="1">Christmas</option>
                        <option value="2">Birthdays</option>
                        <option value="3">Valentines</option>
                        <option value="4">Miscellaneous</option>
                    </select> 
                </div>
                <div class="col l3 s6 m6 input-field">
                    <h6 class="grey-text"><i class="fas fa-bars fa-lg fa-pull-left"></i>CATEGORY</h6>
                    <select name="category4">
                        <option value="0" disabled selected>Choose category</option>
                        <option value="1">Christmas</option>
                        <option value="2">Birthdays</option>
                        <option value="3">Valentines</option>
                        <option value="4">Miscellaneous</option>
                    </select> 
                </div>
                <div class="input-field col l6 s6 m6">
                </div>
                <div class="input-field col s12 josefin greyish-text center-align file-field input-field">
                    <div class="btn waves-effect waves-light bluec righteous">
                        <i class="fa fa-image fa-3x"></i>
                        <input type="file" name="foto" accept="image/jpeg,image/x-png" data-validetta="required">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Select the postcard">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col s12">
                        <button type="submit" class="btn waves-effect waves-light bluec righteouse" style="width:100%;">Upload Postcard</button>
                    </div>
                </div>
                <div class="row josefin">
                </div>
            </div>
        </form>
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
    <script src="../js/newPostcard.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
    <script src="../js/validetta/dist/validetta.min.js"></script>
    <script src="../js/confirm/dist/jquery-confirm.min.js"></script>
  </body>
</html>
<?php
	}
	else
	{
        header("location:../index.php");
	}
?>