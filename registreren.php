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

    <title>'t Fruithuisje - Aanmelden</title>
</head>

<body>

<div id="loginlogosection">
    <img onclick="location.href='index.php';" src="img/logo.png" alt="website logo" style="cursor: pointer;">
</div>

<div class="login">
    <h1>Aanmelden</h1>
    <form action="inc/registreren.inc.php" method="post">
        <input type="text" name="voornaam" placeholder="Voornaam" id="voornaam" required>
        <input type="text" name="achternaam" placeholder="Achternaam" id="achternaam" required>
        <input type="text" name="email" placeholder="E-mail" id="email" required>
        <input type="text" name="bedrijfsnaam" placeholder="Bedrijfsnaam" id="bedrijfsnaam" required>
        <input type="password" name="wachtwoord" placeholder="Wachtwoord" id="wachtwoord" required>
        <input type="submit" name="submit" value="Aanmelden">
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "none") {
                echo "<p style='color:#7FB319;'>Account is sucsessvol geregistreerd!<br> er zal zo spoedig mogelijk contact met u worden opgenomen</p>";
            }
            else if ($_GET["error"] == "ongeldigeemail") {
                    echo "<p style='color:red'>E-mail is al in gebruik! Login in of probeer een andere E-mail.</p>";
                }
            else if ($_GET["error"] == "stmt1failed") {
                echo "<p style='color:red'>oeps er is een onverwachte fout opgetreden, probeer het later opnieuw.</p>";
            }
            else if ($_GET["error"] == "stmt2failed") {
                echo "<p style='color:red'>oeps er is een onverwachte fout opgetreden, probeer het opnieuw.</p>";
            }
        }
        ?>
        <p>al een account? <a href="login.php">klik hier om in te loggen!</a> </p>
    </form>
</div>

</body>
</html>