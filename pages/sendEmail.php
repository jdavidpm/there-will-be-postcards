<?php
    include("phpMailer5226/PHPMailerAutoload.php");
    include("passAccount.php");
    include("configDB.php");



    $sql = "SELECT * FROM user WHERE iduser = '1'";
    $res = mysqli_query($conexion,$sql);
    $inf = mysqli_fetch_row($res);


    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPOptions = array(
         'ssl' => array(
         'verify_peer' => false,
         'verify_peer_name' => false,
         'allow_self_signed' => true
         )
         );
        $mail->SMTPDebug = 2;                                   // Enable verbose debug output
        $mail->isSMTP();                                                // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $correo;                          // SMTP username
        $mail->Password = $contrasena;                    // SMTP password
        $mail->SMTPSecure = 'tls';                              // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                          // TCP port to connect to
    
        //Recipients
        $mail->setFrom("tweb@escom.ipn.mx", "TWeb 20201");
        $mail->addAddress("jdavidpm.undonedreams@gmail.com","JAOR");     // Add a recipient
        $mail->addAddress("jdavidpm.undonedreams@gmail.com","JAOR");     // Add a recipient
            
        //Attachments
        $mail->addAttachment("../images/pf/1.jpg", "Foto Estudiante");    // Optional name
    
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Ficha Alumno - TWeb 20201';
        $mail->Body    = "<p>".$inf[1]."Esto es una prueba para la Unidad de Aprendizaje de <strong>TWeb</strong> de la <span style='color:#069;'>ESCOM</span></p><h1 style='color:#F00;'>TWeb 2020-1</h1>'";
        $mail->AltBody = 'Texto alternativo del correo en caso de no soporte para HTML';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
?>