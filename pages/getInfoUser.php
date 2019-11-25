<?php
    include("configDB.php");

    $iduser = $_SESSION["iduser"];

    $sqlinfoUser = "SELECT * FROM user WHERE iduser = '$iduser'";
    $resinfoUser = mysqli_query($conexion, $sqlinfoUser);
    $infoUser = mysqli_fetch_row($resinfoUser);

    $profilePic = "./../images/pf/$iduser.jpg";

?>