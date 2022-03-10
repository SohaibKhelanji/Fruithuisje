<?php

include_once 'db.inc.php';

if (isset($_POST['updateprijzen'])) {


    $query = "UPDATE `product` SET `prPrijs` = '$_POST[prijs]' WHERE `product`.`prId` = $_POST[id];";
    $query_run = mysqli_query($conn, $query );

    if ($query_run) {
        header("location:../admin.php?prijzengeupdate");
        exit();
    }
    else {
        header("location:../admin.php?prijzenupdategefaald");
    }
}

if (isset($_POST['updatekorting'])) {


    $query = "UPDATE `zkklant` SET `zkKorting` = $_POST[korting] WHERE `zkklant`.`zkID` = $_POST[id];";
    $query_run = mysqli_query($conn, $query );

    if ($query_run) {
        header("location:../admin.php?kortinggeupdate");
        exit();
    }
    else {
        header("location:../admin.php?kortingupdategefaald");
    }
}





