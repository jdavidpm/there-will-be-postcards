<?php
    include("configDB.php");

    $iduser = $_SESSION["iduser"];

    $sqlinfoUser = "SELECT * FROM user WHERE iduser = '$iduser'";
    $resinfoUser = mysqli_query($conexion, $sqlinfoUser);
    $infoUser = mysqli_fetch_row($resinfoUser);

    $sqlinfoAsSender = "SELECT * FROM received_sent WHERE idsender = '$iduser'";
    $resinfoAsSender = mysqli_query($conexion, $sqlinfoAsSender);
    $infoAsSender = mysqli_fetch_row($resinfoAsSender);

    $sqlinfoAsReceiver = "SELECT * FROM received_sent WHERE idreceiver = '$iduser'";
    $resinfoAsReceiver = mysqli_query($conexion, $sqlinfoAsReceiver);
    $infoAsReceiver = mysqli_fetch_row($resinfoAsReceiver);

    $sqlinfoAsAdmi = "SELECT idmanager FROM administrator WHERE email = '$infoUser[3]'";
    $resinfoAsAdmi = mysqli_query($conexion, $sqlinfoAsAdmi);
    $infoAsAdmi = mysqli_fetch_row($resinfoAsAdmi);

    $profilePic = "./../images/pf/$iduser.jpg";

?>