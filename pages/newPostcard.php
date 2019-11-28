<?php
    include("configDB.php");
    include("getPosts.php");

    $queryAnalized = array(); //respAX use in professor's example


        $insertSQLQuery = "INSERT INTO postcard (sent, namepost) VALUES('0','$postcardName')";
        $resultInsert = mysqli_query($conexion, $insertSQLQuery);
        $affectedRowsInsert = mysqli_affected_rows($conexion);

        $selectSQLQuery = "SELECT * FROM postcard WHERE namepost = '$postcardName'";
        $resultSelect = mysqli_query($conexion, $selectSQLQuery);
        $rowFetchedSelect = mysqli_fetch_row($resultSelect);
        $idPost = $rowFetchedSelect[0];

        if ($category1 != 0)
        {
            $selectSQLQuery = "INSERT INTO postcard_category VALUES ($idPost, $category1)";
            $resultSelect = mysqli_query($conexion, $selectSQLQuery);
        }
        if ($category2 != 0)
        {
            $selectSQLQuery = "INSERT INTO postcard_category VALUES ($idPost, $category2)";
            $resultSelect = mysqli_query($conexion, $selectSQLQuery);
        }
        if ($category3 != 0)
        {
            $selectSQLQuery = "INSERT INTO postcard_category VALUES ($idPost, $category3)";
            $resultSelect = mysqli_query($conexion, $selectSQLQuery);
        }
        if ($category4 != 0)
        {
            $selectSQLQuery = "INSERT INTO postcard_category VALUES ($idPost, $category4)";
            $resultSelect = mysqli_query($conexion, $selectSQLQuery);
        }


        if($affectedRowsInsert == 1)
        {
            $queryAnalized["val"] = 1;
            $queryAnalized["msj"] = "<h5 class='center-align josefin'>Upload Succesful!</h5>";
            $dirFoto = "./../postcards/p";
            $archFoto = $dirFoto.basename($_FILES["foto"]["name"]);
            $extFoto = pathinfo($_FILES["foto"]["name"],PATHINFO_EXTENSION);
            $destFoto = $dirFoto.$idPost.".".$extFoto;
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
    echo json_encode($queryAnalized);
?>