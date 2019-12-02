<?php
    session_start();
    $iduser = $_SESSION["iduser"];
    include("phpMailer5226/PHPMailerAutoload.php");
    include("passAccount.php");
    include("configDB.php");

    $tmp = $_REQUEST["postToSend"];
    $sql = "SELECT * FROM postcard WHERE idpostcard = ".$tmp;
    $res = mysqli_query($conexion, $sql);
    $infoPostcard = mysqli_fetch_row($res);
    
    $sql = "SELECT * FROM user WHERE iduser = ".$iduser;
    $res = mysqli_query($conexion, $sql);
    $infoSender = mysqli_fetch_row($res);

    $pathPostcard = "../postcards/p".$infoPostcard[0].".jpg";

    $nameSender =  $infoSender[1].' '.$infoSender[2];
    $signSender = $_POST["sign"];
    $emailSenderF = $infoSender[3];

    $emailReceiver = $_POST["email"];

    $sql = "SELECT * FROM user WHERE email = '$emailReceiver'";
    $res = mysqli_query($conexion, $sql);
    $infoReceiver = mysqli_fetch_row($res);
    if ($infoReceiver == null) { $idReceiver = 0;}
    else {$idReceiver = $infoReceiver[0];}

    $mail = new PHPMailer(true);
    try
    {
        //Server settings
        $mail->SMTPOptions = array(
         'ssl' => array(
         'verify_peer' => false,
         'verify_peer_name' => false,
         'allow_self_signed' => true
         )
         );
        //$mail->SMTPDebug = 2;                          // Enable verbose debug output
        $mail->isSMTP();                               // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                        // Enable SMTP authentication
        $mail->Username = $emailSender;                // SMTP username
        $mail->Password = $passwordSender;             // SMTP password
        $mail->SMTPSecure = 'tls';                     // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                             // TCP port to connect to
    
        //Recipients
        $mail->setFrom($emailSenderF, $nameSender);
        $mail->addAddress($emailReceiver, "Friend");     // Add a recipient
            
        //Attachments
        $mail->addAttachment($pathPostcard, $infoPostcard[2]);    // Optional name
    
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $nameSender.' has sent you a postcard from TWBP!';
        $mail->Body    = "<p>".$infoPostcard[1]."Esto es una prueba para la Unidad de Aprendizaje de <strong>TWeb</strong> de la <span style='color:#069;'>ESCOM</span></p><h1 style='color:#F00;'>TWeb 2020-1</h1>'";
        $mail->AltBody = 'Texto alternativo del correo en caso de no soporte para HTML';
    
        if($mail->send())
        {
            $dateNow = date("Y-m-d");
            $sql = "INSERT INTO received_sent VALUES ('$idReceiver', '$iduser', '$infoPostcard[0]', '$signSender', '$dateNow')";
            $res = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Log in - There Will Be Postcards</title>
	
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
    <div class="bg-image"></div>
    <a class="btn-floating btn-large waves-effect waves-light bluec corner tooltipped dropdown-trigger" data-beloworigin="true" data-target="dropdown1" data-position="left" data-tooltip="Menu"><i class="material-icons">menu</i></a>
    <ul id='dropdown1' class='dropdown-content'>
            <li><a href="../index.php" class="bluec-text"><i class="fas fa-home bluec-text fa-2x fa-pull-left"></i>Home</a></li>
            <li><a href="gallery.php" class="bluec-text"><i class="fas fa-images bluec-text fa-2x fa-pull-left"></i>Gallery</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a href="http://facebook.com" target="_blank" class="bluec-text"><i class="fab fa-facebook bluec-text fa-2x fa-pull-left"></i>Facebook</a></li>
            <li><a href="http://twitter.com" target="_blank" class="bluec-text"><i class="fab fa-twitter bluec-text fa-2x fa-pull-left"></i>Twitter</a></li>
            <li><a href="http://instagram.com" target="_blank" class="bluec-text"><i class="fab fa-instagram bluec-text fa-2x fa-pull-left"></i>Instagram</a></li>
    </ul>
    <main class="valign-wrapper above">
            <div id="login-page" class="row">
                <div class="col l12 s12 z-depth-6 card-panel" style="padding: 10% 10% 15% 10%;">
                    <h2 class="staat green-text">Email sent successfully!</h2>
                    <a class="btn green righteous waves-effect waves-ligh" href="gallery.php"> Back to gallery </a>
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
<?php
    }
    }
    catch (Exception $e)
    {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        header("location: gallery.php");
    }
?>