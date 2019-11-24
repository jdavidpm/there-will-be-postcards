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
    <link href="../js/confirm/dist/jquery-confirm.min.css" rel="stylesheet">
</head>
<body class="greyish">
	<header>
    </header>
    <div class="bg-image2"></div>
    <a class="btn-floating btn-large waves-effect waves-light bluec corner tooltipped dropdown-trigger" data-beloworigin="true" data-target="dropdown1" data-position="left" data-tooltip="Menu"><i class="material-icons">menu</i></a>
    <ul id='dropdown1' class='dropdown-content'>
            <li><a href="../index.html" class="bluec-text"><i class="fas fa-home bluec-text fa-2x fa-pull-left"></i>Home</a></li>
            <li><a href="gallery.php" class="bluec-text"><i class="fas fa-images bluec-text fa-2x fa-pull-left"></i>Gallery</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a href="#!" class="bluec-text"><i class="fab fa-facebook bluec-text fa-2x fa-pull-left"></i>Facebook</a></li>
            <li><a href="#!" class="bluec-text"><i class="fab fa-twitter bluec-text fa-2x fa-pull-left"></i>Twitter</a></li>
            <li><a href="#!" class="bluec-text"><i class="fab fa-instagram bluec-text fa-2x fa-pull-left"></i>Instagram</a></li>
    </ul>
    <main class="valign-wrapper above">
        <div id="signup-page" class="row">
            <div class="col s12 z-depth-6 card-panel">
                <!--<form id="signForm">
                    <div class="input-field col s6 josefin">
                        <input class="validate" id="firstName" type="text" for="firstName" data-validetta="required">
                        <label for="firstName" data-error="wrong" data-success="right"><i class="fas fa-address-card fa-lg fa-pull-left"></i>FIRST NAME</label>
                    </div>
                    <div class="input-field col s6 josefin">
                        <input class="validate" id="lastName" type="text" for="lastName" data-validetta="required">
                        <label for="lastName" data-error="wrong" data-success="right"><i class="far fa-address-card fa-lg fa-pull-left"></i>LAST NAME</label>
                    </div>
                    <div class="input-field col s12 josefin">
                        <input class="validate" id="email" type="text" for="email" data-validetta="required">
                        <label for="email" data-error="wrong" data-success="right"><i class="far fa-envelope fa-lg fa-pull-left"></i>EMAIL</label>
                    </div>
                    <div class="input-field col s12 josefin">
                        <input id="password" type="password" for="password" data-validetta="required">
                        <label for="password"><i class="fas fa-lock fa-lg fa-pull-left"></i>PASSWORD</label>
                    </div>      
                    <div class="input-field col s6 josefin greyish-text">
                        <h6 class="grey-text"><i class="fas fa-venus-mars fa-lg fa-pull-left"></i>GENDER</h6>
                        <select id="gender">
                            <option value="" disabled selected>Choose gender</option>
                            <option value="1">Female</option>
                            <option value="2">Male</option>
                            <option value="3">Other</option>
                        </select>   
                    </div>
                    <div class="input-field col s6 josefin greyish-text">
                        <h6 class="grey-text"><i class="fas fa-birthday-cake fa-pull-left"></i>BIRTHDATE</h6>
                        <input type="text" class="datepicker"  id="birthdate" data-validetta="required">
                    </div>
                    <div class="input-field col s12 josefin greyish-text center-align file-field input-field">
                        <div class="btn waves-effect waves-light bluec righteous">
                            <i class="fa fa-image fa-3x"></i>
                            <input type="file" data-validetta="required">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Select a picture">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="btn waves-effect waves-light bluec righteouse" style="width:100%;">Sign Up</button>
                        </div>
                    </div>
                    <div class="row josefin">
                        <div class="col s12 m12 l12">
                            <p class="margin medium-small"><a href="login.php">Already Register?</a></p>
                        </div>       
                    </div>
                </form>-->
                <form id="signForm" autocomplete="off">
                    <div class="row josefin">
                        <div class="col l6 s12 m6 input-field">
                            <input class="validate" id="firstName" type="text" name="firstName" data-validetta="required">
                            <label for="firstName" data-error="wrong" data-success="right"><i class="fas fa-address-card fa-lg fa-pull-left"></i>FIRST NAME</label>
                        </div>
                        <div class="col l6 s12 m6 input-field">
                            <input class="validate" id="lastName" type="text" name="lastName" data-validetta="required">
                            <label for="lastName" data-error="wrong" data-success="right"><i class="far fa-address-card fa-lg fa-pull-left"></i>LAST NAME</label>
                        </div>
                        <div class="col l12 s12 m6 input-field ">
                            <input class="validate" id="email" type="text" name="email" data-validetta="required">
                            <label for="email" data-error="wrong" data-success="right"><i class="far fa-envelope fa-lg fa-pull-left"></i>EMAIL</label>
                        </div>
                        <div class="col l12 s12 m6 input-field">
                            <input id="password" type="password" name="password" data-validetta="required">
                            <label for="password"><i class="fas fa-lock fa-lg fa-pull-left"></i>PASSWORD</label>
                        </div>
                        <div class="col l6 s6 m6 input-field">
                            <h6 class="grey-text"><i class="fas fa-venus-mars fa-lg fa-pull-left"></i>GENDER</h6>
                            <select name="gender">
                                <option value="0" disabled selected>Choose gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select> 
                        </div>
                        <div class="input-field col l6 s6 m6">
                            <h6 class="grey-text"><i class="fas fa-birthday-cake fa-pull-left"></i>BIRTHDATE</h6>
                            <input type="text" class="datepicker"  id="birthdate" name="birthdate" data-validetta="required">
                        </div>
                        <div class="input-field col s12 josefin greyish-text center-align file-field input-field">
                            <div class="btn waves-effect waves-light bluec righteous">
                                <i class="fa fa-image fa-3x"></i>
                                <input type="file" name="foto" accept="image/jpeg,image/x-png" data-validetta="required">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Select a picture">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <button type="submit" class="btn waves-effect waves-light bluec righteouse" style="width:100%;">Sign Up</button>
                            </div>
                        </div>
                        <div class="row josefin">
                            <div class="col s12 m12 l12">
                                <p class="margin medium-small"><a href="login.php">Already Register?</a></p>
                            </div>       
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
    <script src="../js/signup.js"></script>
    <script src="../js/validetta/dist/validetta.min.js"></script>
    <script src="../js/confirm/dist/jquery-confirm.min.js"></script>
  </body>
</html>