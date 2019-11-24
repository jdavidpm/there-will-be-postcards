<?php
    session_start();
    include("configDB.php");
    include("getPosts.php");

    $password = md5($password);
    $respAX = array();
    $sqlLoginV3v = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $resLoginV3v = mysqli_query($conexion,$sqlLoginV3v);
    $infLoginV3v = mysqli_fetch_row($resLoginV3v);
    if(mysqli_num_rows($resLoginV3v) == 1){
        $_SESSION["email"] = $infLoginV3v[0];
        $respAX["val"] = 1;
        $respAX["msj"] = "<h3 class='center-align staat'>Welcome back, $infLoginV3v[1]!</h3>";
    }else{
        $respAX["val"] = 0;
        $respAX["msj"] = "<h3 class='center-align staat'>You're not registered o Wrong Credentials</h3>";
    }

    echo json_encode($respAX);
?>