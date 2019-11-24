<?php
    include("configDB.php");
    include("getPosts.php");

    $respAX = array();
    $password = md5($password);
    $sqlRegistro = "INSERT INTO user (firstName, lastname, email, password, gender, birthdate) VALUES('$firstName','$lastName','$email','$password','$gender','$birthdate')";
    $resRegistro = mysqli_query($conexion,$sqlRegistro);
    $filasAfectadasRegistro = mysqli_affected_rows($conexion);

    if($filasAfectadasRegistro == 1){
        $respAX["val"] = 1;
        $respAX["msj"] = "<h5 class='center-align'>Se registraron correctamente sus datos. Gracias :)</h5>";
        $dirFoto = "./../images/";
        $archFoto = $dirFoto.basename($_FILES["foto"]["name"]);
        $extFoto = pathinfo($_FILES["foto"]["name"],PATHINFO_EXTENSION);
        $destFoto = $dirFoto.$_POST["firstName"].".".$extFoto;
        if(move_uploaded_file($_FILES["foto"]["tmp_name"], $destFoto)){
            $respAX["msj"] .= "<h5 class='center-align'>La foto se guard&oacute; correctamente</h5>";
        }else{
            $respAX["msj"] .= "<h5 class='center-align'>No se pudo guardar la foto.</h5>";
        }
    }else{
        $respAX["val"] = 0;
        $respAX["msj"] = "<h5 class='center-align'>Se present&oacute; un error. Favor de intentarlo nuevamente.</h5>";
    }

    echo json_encode($respAX);

?>