<?php
    session_start();
    include("configDB.php");

    $queryAnalized = array();
    $idPost = array();
    $naPost = array();
    $catPost = array();
    $selectSQLQuery = "SELECT idpostcard, namepost FROM postcard;";
    $resultQuery = mysqli_query($conexion, $selectSQLQuery);
    while ($row = mysqli_fetch_array($resultQuery))
    {
        $catPost[$row[0]] = array();
        array_push($idPost, $row["idpostcard"]);
        array_push($naPost, $row["namepost"]);
    }
    $queryAnalized["idPost"] = $idPost;
    $queryAnalized["naPost"] = $naPost;
    
    $selectSQLQuery = "select * from postcard_category;";
    $resultQuery = mysqli_query($conexion, $selectSQLQuery);
    while ($row = mysqli_fetch_array($resultQuery))
    {
        array_push($catPost[$row[0]], $row["idcategory"]);
    }
    $queryAnalized["catPost"] = $catPost;
    echo json_encode($queryAnalized);
?>