<?php
session_start();
?>
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">

    <title>'t Fruithuisje - Contact</title>
</head>

<body>

<div id="mainnavigation">
    <div id="navigation">
        <nav>
            <ul>
                <a href="index.php">Home</a>
                <a href="bestellen.php">Bestellen</a>
                <a href="contact.php" style="color: green">Contact</a>
            </ul>
        </nav>
    </div>
    <div id="navlogo">
        <img src="img/logo.png" alt="website logo" onclick="location.href='index.php.';" style="cursor: pointer">
    </div>

    <div id="navlogin">
        <?php
        if (isset($_SESSION["userid"])) {
            echo " <a href='inc/loguit.inc.php'>Log uit</a>";
        }
        else {
            echo " <a href='login.php'>Login</a>";
        }
        ?>
        <i class="material-icons" style="font-size:40px;color:#7FB319;" onclick="location.href='winkelmandje.php'">shopping_cart</i>
    </div>
</div>


<div id="contacttxt">

    <h4>Ondanks de maatregelen die zijn ingesteld om het coronavirus in te dammen blijven wij nog altijd bereikbaar,<br>
        zodat u eventuele actuele informatie kunt ophalen en/of verdere vragen kunt stellen.<br>
        Als u contact opneemt, kan het zijn dat het wat langer duurt dan gewoonlijk, voordat wij u te woord staan.<br>
        Wij vragen hiervoor uw begrip.</h4>
<hr>
</div>

<div id="contactgegevens">
    <p>Telefoonnummer: <br>
       E-mail:
    </p>
</div>



<footer>
    <p>Copyright &copy; 2021 <i>'t Fruithuisje</i> alle rechten voorbehouden.</p>
</footer>


</body>
</html>