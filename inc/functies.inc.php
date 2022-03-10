<?php

require_once 'db.inc.php';

function emailingebruik($conn, $email) {
    $sql = "SELECT * FROM zkklant WHERE zkEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../registreren.php?error=stmt1failed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createUser($conn, $voornaam, $achternaam, $email, $bedrijfsnaam, $wachtwoord) {
    $sql = "INSERT INTO zkklant (zkVoornaam, zkAchternaam, zkEmail, zkBedrijfsnaam, zkWachtwoord) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../registreren.php?error=stmt2failed");
        exit();
    }

    $hashedWachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $voornaam, $achternaam, $email, $bedrijfsnaam, $hashedWachtwoord);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../registreren.php?error=none");
    exit();

}

function loginUser($conn, $email, $wachtwoord) {
    $emailingebruik = emailingebruik($conn, $email);

    if ($emailingebruik === false) {
        header("location:../login.php?error=verkeerdegegevens");
        exit();
    }

    $hashedWachtwoord = $emailingebruik["zkWachtwoord"];
    $checkWachtwoord = password_verify($wachtwoord, $hashedWachtwoord);

    if ($checkWachtwoord === false) {
        header("location:../login.php?error=verkeerdegegevens");
        exit();
    }
    else if ($checkWachtwoord === true) {
        session_start();
        $_SESSION["userid"] = $emailingebruik["zkID"];
        $_SESSION["usernaam"] = $emailingebruik["zkVoornaam"];
        $_SESSION["useremail"] = $emailingebruik["zkEmail"];
        $_SESSION["userdiscount"] = $emailingebruik["zkKorting"];

    }

        if ($_SESSION["useremail"] === "admin@admin.nl") {
            header("location:../admin.php?admin");
            exit();
        }
        else {
            header("location:../index.php?ingelogd");
            exit();
        }
    }


