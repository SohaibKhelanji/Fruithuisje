<?php
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $naam = $_POST['naam'];
    $straatnaam = $_POST['straatnaam'];
    $plaats = $_POST['plaats'];


    $subject = "'t Fruithuisje bedankt u voor uw bestelling";
    $mailTo = "tfruithuisje@hotmail.com";
    $headers = "From:".$email;
    $txt ="Bedankt ".$naam."Fijn dat u koos voor 't Fruithuisje. We hebben uw bestelling ontvangen en gaan direct aan de slag!";

    mail($mailTo, $subject, $txt, $headers);

    if (mail($mailTo, $subject, $txt, $headers)) {
         echo "Email successfully sent to $mailTo...";
} else {
        echo "Email sending failed...";
}
    header("Location: ../index.php?bestellingverstuurd");
}
