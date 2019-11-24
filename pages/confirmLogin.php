<?php
    session_start();
    include("configDB.php");
    include("getPosts.php");

    $password = md5($password);
    $queryAnalized = array();
    $selectSQLQuery = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $resultQuery = mysqli_query($conexion, $selectSQLQuery);
    $rowsQuery = mysqli_fetch_row($resultQuery);
    if(mysqli_num_rows($resultQuery) == 1){
        $_SESSION["email"] = $rowsQuery[0];
        $queryAnalized["val"] = 1;
        $queryAnalized["msj"] = "<h3 class='center-align josefin'>Welcome back, $rowsQuery[1]!</h3>";
    }else{
        $queryAnalized["val"] = 0;
        $queryAnalized["msj"] = "<h3 class='center-align josefin'>You're not registered o Wrong Credentials</h3>";
    }

    echo json_encode($queryAnalized);
?>