<?php
    include("configDB.php");
    include("getPosts.php");

    $queryAnalized = array(); //respAX use in professor's example
    $password = md5($password);

    //Check if email is already in use
    $selectSQLQuery = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $resultSelect = mysqli_query($conexion, $selectSQLQuery);
    $rowFetchedSelect = mysqli_fetch_row($resultSelect);

    if(mysqli_num_rows($resultSelect) == null)
    {
        //Insert new user
        $insertSQLQuery = "INSERT INTO user (firstName, lastname, email, password, gender, birthdate) VALUES('$firstName','$lastName','$email','$password','$gender','$birthdate')";
        $resultInsert = mysqli_query($conexion, $insertSQLQuery);
        $affectedRowsInsert = mysqli_affected_rows($conexion);

        //Fetch id from new user (so we name his/her profile picture)
        $selectSQLQuery = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $resultSelect = mysqli_query($conexion, $selectSQLQuery);
        $rowFetchedSelect = mysqli_fetch_row($resultSelect);
        $idUser = $rowFetchedSelect[0];

        if($affectedRowsInsert == 1)
        {
            $queryAnalized["val"] = 1;
            $queryAnalized["msj"] = "<h5 class='center-align josefin'>Succesful registration!</h5>";
            $dirFoto = "./../images/pf/";
            $archFoto = $dirFoto.basename($_FILES["foto"]["name"]);
            $extFoto = pathinfo($_FILES["foto"]["name"],PATHINFO_EXTENSION);
            $destFoto = $dirFoto.$idUser.".".$extFoto;
            if(move_uploaded_file($_FILES["foto"]["tmp_name"], $destFoto))
            {
                $queryAnalized["msj"] .= "<h5 class='center-align josefin'>Picture saved</h5>";
            }
            else
            {
                $queryAnalized["msj"] .= "<h5 class='center-align josefin'>Can't upload picture</h5>";
            }
        }
        else
        {
            $queryAnalized["val"] = 0;
            $queryAnalized["msj"] = "<h5 class='center-align josefin'>Try again later.</h5>";
        }
    }
    else
    {
        $queryAnalized["val"] = 0;
        $queryAnalized["msj"] = "<h5 class='center-align josefin'>Email already in use.</h5>";
    }
    echo json_encode($queryAnalized);
?>