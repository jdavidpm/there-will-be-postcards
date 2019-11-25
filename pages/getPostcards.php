<?php
    session_start();
    include("configDB.php");

    $queryAnalized = array();
    $idPost = array();
    $naPost = array();
    $selectSQLQuery = "SELECT idpostcard, namepost FROM postcard;";
    $resultQuery = mysqli_query($conexion, $selectSQLQuery);
    while ($row = mysqli_fetch_array($resultQuery))
    {
        array_push($idPost, $row["idpostcard"]);
        array_push($naPost, $row["namepost"]);
    }
    $queryAnalized["idPost"] = $idPost;
    $queryAnalized["naPost"] = $naPost;
    echo json_encode($queryAnalized);
?>