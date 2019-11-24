<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Sign up - There Will Be Postcards</title>
	
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/mystyle.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Cinzel|Josefin+Sans|Liu+Jian+Mao+Cao|Permanent+Marker|Righteous|Staatliches|ZCOOL+XiaoWei&display=swap" rel="stylesheet">
	<link href="../fontawesome/css/all.min.css" rel="stylesheet">
</head>
<body class="greyish">
	<header>
    </header>
    <div class="bg-image2"></div>
    <a class="btn-floating btn-large waves-effect waves-light bluec corner tooltipped dropdown-trigger" data-beloworigin="true" data-target="dropdown1" data-position="left" data-tooltip="Menu"><i class="material-icons">menu</i></a>
    <ul id='dropdown1' class='dropdown-content'>
            <li><a href="../index.html" class="bluec-text"><i class="material-icons bluec-text">home</i>Home</a></li>
            <li><a href="gallery.php" class="bluec-text"><i class="material-icons bluec-text">view_module</i>Gallery</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a href="#!" class="bluec-text"><i class="fab fa-facebook bluec-text"></i>Facebook</a></li>
            <li><a href="#!" class="bluec-text"><i class="fab fa-twitter bluec-text"></i>Twitter</a></li>
            <li><a href="#!" class="bluec-text"><i class="fab fa-instagram bluec-text"></i>Instagram</a></li>
    </ul>
    <main class="valign-wrapper above">
        <div id="signup-page" class="row">
            <div class="col s12 z-depth-6 card-panel">
                <form>
                    <div class="row"></div>
                    <div class="row">
                        <div class="input-field col s6 josefin">
                            <input class="validate" id="firstName" type="text">
                            <label for="firstName" data-error="wrong" data-success="right"><i class="fas fa-address-card left"></i>FIRST NAME</label>
                        </div>
                        <div class="input-field col s6 josefin">
                            <input class="validate" id="email" type="email">
                            <label for="email" data-error="wrong" data-success="right"><i class="far fa-address-card left"></i>SECOND NAME</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 josefin">
                            <input class="validate" id="secondName" type="text">
                            <label for="secondName" data-error="wrong" data-success="right"><i class="far fa-envelope left"></i>EMAIL</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 josefin">
                            <input id="password" type="password">
                            <label for="password"><i class="fas fa-key left"></i>PASSWORD</label>
                        </div>
                    </div>
                    <div class="row left-align valign-wrapper">
                        <div class="input-field col s2 josefin greyish-text"></div>
                        <div class="input-field col s4 josefin greyish-text">
                            <h6 class="grey-text"><i class="fas fa-venus-mars left"></i>GENDER</h6>
                            <select>
                                <option value="" disabled selected>Choose gender</option>
                                <option value="1">Female</option>
                                <option value="2">Male</option>
                                <option value="3">Other</option>
                            </select>   
                        </div>
                        <div class="input-field col s4 josefin greyish-text">
                            <h6 class="grey-text"><i class="fas fa-birthday-cake left"></i>BIRTHDATE</h6>
                            <input type="text" class="datepicker">
                        </div>
                        <div class="input-field col s2 greyish-text"></div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <a href="#" class="btn waves-effect waves-light col s12 bluec righteous">Sign Up</a>
                        </div>
                    </div>
                    <div class="row josefin">
                        <div class="input-field col s12 m12 l12">
                            <p class="margin medium-small"><a href="login.php">Already Register?</a></p>
                        </div>       
                    </div>
                </form>
            </div>
        </div>
    </main>
	<!--  Scripts-->
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="../js/init.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
  </body>
</html>