<?php

if (isset($_POST["submit"])) {

    $email= $_POST["email"];
    $wachtwoord = $_POST["password"];

    require_once  'db.inc.php';
    require_once 'functies.inc.php';

    loginUser($conn, $email, $wachtwoord);

}
else {
    header("location:../login.php");
    exit();
}