<!DOCTYPE html>

<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all">
    <meta name="language" content="dutch">
    <meta name= "Author" content="Sohaib Khelanji">
    <meta name="description" content="xxx">
    <meta name="keywords" content="'t Fruithsuisje, fruit, groenten, fruithuis, fruithuisje">
    <meta name="copyright" content="t' Fruithuisje BV.">

    <link rel="icon" href="img/websiteicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">

    <title>'t Fruithuisje - Login</title>
</head>

<body>

<div id="loginlogosection">
    <img onclick="location.href='index.php';" src="img/logo.png" alt="website logo" style="cursor: pointer;">
</div>

<div id="loginbannersection">
   <img src="img/loginbanner.gif" alt="animatie van een winkelmandje" >

</div>

<div class="login">
    <h1>Login</h1>
    <form action="inc/login.inc.php" method="post">
        <input type="text" name="email" placeholder="Email" id="email" required>
        <input type="password" name="password" placeholder="Wachtwoord" id="password" required>
        <input type="submit" name="submit" value="Login">
        <?php
        if (isset($_GET["error"])) {
           if ($_GET["error"] == "verkeerdegegevens") {
                echo "<p style='color:red'>Het ingevoerde e-mailadres of wachtwoord is onjuist. Probeer het alstublieft nog een keer.</p>";
            }
        }
        ?>
        <p>Nieuwsgierig naar ons aanbod?<br> <a href="registreren.php">Meld uw bedrijf aan!</a> </p>
    </form>
</div>

</body>
</html>