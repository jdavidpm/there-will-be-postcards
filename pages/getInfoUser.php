<?php
    include("configDB.php");

    $iduser = $_SESSION["iduser"];

    $sqlinfoUser = "SELECT * FROM user WHERE iduser = '$iduser'";
    $resinfoUser = mysqli_query($conexion, $sqlinfoUser);
    $infoUser = mysqli_fetch_row($resinfoUser);

    $sqlinfoAsReceiver = "SELECT * FROM received WHERE idreceiver = '$iduser'";
    $resinfoAsReceiver = mysqli_query($conexion, $sqlinfoAsReceiver);
    $infoAsReceiver = mysqli_fetch_row($resinfoAsReceiver);

    $sqlinfoAsSender = "SELECT * FROM sent WHERE idsender = '$iduser'";
    $resinfoAsSender = mysqli_query($conexion, $sqlinfoAsSender);
    $infoAsSender = mysqli_fetch_row($resinfoAsSender);

    $profilePic = "./../images/pf/$iduser.jpg";

?>