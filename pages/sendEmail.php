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
    echo $idReceiver;

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
        $mail->SMTPDebug = 2;                          // Enable verbose debug output
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
    
        if($mail->send()){
            echo "Correo enviado correctamente. <a href='./alumno.php'>Regresar</a>";
            $dateNow = date("Y-m-d");
            $sql = "INSERT INTO received_sent VALUES ('$idReceiver', '$iduser', '$infoPostcard[0]', '$signSender', '$dateNow')";
            $res = mysqli_query($conexion, $sql);
        }
    }
    catch (Exception $e)
    {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
?>