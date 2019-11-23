<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Log in - There Will Be Postcards</title>
	
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/mystyle.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Cinzel|Josefin+Sans|Liu+Jian+Mao+Cao|Permanent+Marker|Righteous|Staatliches|ZCOOL+XiaoWei&display=swap" rel="stylesheet">
	<link href="fontawesome/css/all.min.css" rel="stylesheet">
</head>
<body class="greyish">
	<header>
    </header>
    <div class="bg-image"></div>
    <a class="btn-floating btn-large waves-effect waves-light bluec corner tooltipped dropdown-trigger" data-beloworigin="true" data-target="dropdown1" data-position="left" data-tooltip="Menu"><i class="material-icons">menu</i></a>
    <ul id='dropdown1' class='dropdown-content'>
        <li><a href="index.php" class="bluec-text"><i class="material-icons bluec-text">home</i>Home</a></li>
        <li><a href="gallery.php" class="bluec-text"><i class="material-icons bluec-text">view_module</i>Gallery</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href="#!" class="bluec-text"><i class="fab fa-facebook bluec-text"></i>Facebook</a></li>
        <li><a href="#!" class="bluec-text"><i class="fab fa-twitter bluec-text"></i>Twitter</a></li>
        <li><a href="#!" class="bluec-text"><i class="fab fa-instagram bluec-text"></i>Instagram</a></li>
    </ul>
    <main class="valign-wrapper above">
            <div id="login-page" class="row">
                <div class="col s12 z-depth-6 card-panel">
                    <form class="login-form">
                        <div class="row"></div><div class="row"></div>
                        <div class="row">
                            <div class="input-field col s12 josefin">
                                <i class="material-icons prefix">mail_outline</i>
                                <input class="validate" id="email" type="email">
                                <label for="email" data-error="wrong" data-success="right">EMAIL</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 josefin">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="password" type="password">
                                <label for="password">PASSWORD</label>
                            </div>
                        </div>
               
                        <div class="row">
                            <div class="input-field col s12">
                                <a href="#" class="btn waves-effect waves-light col s12 bluec righteous">Log In</a>
                            </div>
                        </div>
                        <div class="row josefin">
                            <div class="input-field col s6 m6 l6">
                                <p class="margin center medium-small"><a href="signup.html">Register Now</a></p>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <p class="margin center medium-small"><a href="#">Forgot password?</a></p>
                            </div>          
                        </div>
                    </form>
                </div>
            </div>
        </main>
	<!--  Scripts-->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
  </body>
</html>