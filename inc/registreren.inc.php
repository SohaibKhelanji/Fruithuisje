<?php

if (isset($_POST["submit"])) {

    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $email = $_POST["email"];
    $bedrijfsnaam = $_POST["bedrijfsnaam"];
    $wachtwoord = $_POST["wachtwoord"];

    require_once 'db.inc.php';
    require_once 'functies.inc.php';


    if (emailingebruik($conn, $email ) !== false) {
        header("location:../registreren.php?error=ongeldigeemail");
        exit();
    }


    createUser($conn, $voornaam, $achternaam, $email, $bedrijfsnaam, $wachtwoord);

}
else{
    header("location:../registreren.php");
}