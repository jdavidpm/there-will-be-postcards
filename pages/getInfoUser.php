<?php
    include("configBD.php");

    $iduser = $_SESSION["iduser"];

    $sqlInfAlumno = "SELECT * FROM user WHERE iduser = '$iduser'";
    $resInfAlumno = mysqli_query($conexion, $sqlInfAlumno);
    $infAlumno = mysqli_fetch_row($resInfAlumno);

    $foto = "./../images/pf/$iduser.jpg";

?>