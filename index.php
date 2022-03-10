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

    <title>'t Fruithuisje - Home</title>
</head>

<body>

<div id="mainnavigation">
    <div id="navigation">
        <nav>
            <ul>
                <a href="index.php" style="color: green">Home</a>
                <a href="bestellen.php">Bestellen</a>
                <a href="contact.php">Contact</a>
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

<div id="homebanner">

</div>

<div class="homegridwrapper">

    <div class="homegrid">
        <div class="homegridicon">
            <i class="material-icons" style="font-size:65px;color:#7FB319;">storefront</i>
        </div>

        <div class="homegridicon">
            <i class="material-icons" style="font-size:65px;color:#7FB319;">local_shipping</i>
        </div>

        <div class="homegridicon">
            <i class="material-icons" style="font-size:65px;color:#7FB319;">thumb_up_off_alt</i>
        </div>

        <div class="homegridtitle">
           <h2>Groot assortiment<br>groenten en fruit</h2>
        </div>

        <div class="homegridtitle">
            <h2>Snel besteld<br>snel geleverd</h2>
        </div>

        <div class="homegridtitle">
            <h2>Betrouwbare AGF<br>merken</h2>
        </div>

        <div class="homegridtext">
            <p>Wij leveren het hele jaar door<br>
                een compleet assortiment van<br>
                kwaliteitsproducten, van<br>
                heerlijke citrusvruchten en <br>
                mango’s tot aubergines en paprika's.</p>
        </div>
        <div class="homegridtext">
            <p>Wij verzorgen de complete<br>
                levering aan al onze klanten. Vanuit <br>
                onze vesteging tot aan uw adres, <br>
                in de vroege ochtend tot laat in de avond.</p>
        </div>
        <div class="homegridtext">
            <p>Dankzij samenwerking met telers en exportagents<br>
                kunnen wij continuïteit bieden met onze AGF merken.<br>
                Wij kunnen onze klanten verzekeren<br>
                van betrouwbaar groenten en fruit,<br>
                dat voldoet aan hun specifieke wensen.</p>
        </div>

    </div>

</div>

<div class="homesocialsgridwrapper">
    <div class="homesocialsgrid">
        <div class="homesocialslogo">
            <a href="https://www.facebook.com/" target="blank"><img src="img/facebooklogo.png" alt="Facebook logo"></a>
        </div>
        <div class="homesocialslogo">
            <a href="https://www.instagram.com/" target="blank"><img src="img/instagramlogo.png" alt="Instagram logo"></a>
        </div>
        <div class="homesocialslogo">
            <a href="https://www.twitter.com/" target="blank"><img src="img/twitterlogo.png" alt="Twitter logo"></a>
        </div>
        <div class="homesocialstext">
            <h3>Volg ons op Facebook</h3>
        </div>
        <div class="homesocialstext">
            <h3>Volg ons op Instagram</h3>
        </div>
        <div class="homesocialstext">
            <h3>Volg ons op twitter</h3>
        </div>
    </div>
</div>

<div id="homepicture1">

</div>

<div id="homeoverons">
    <h2>Over ons</h2>
    <p>'t Fruithuisje levert groenten en fruit aan horecagroothandels. Wij bieden een volledig assortiment van verse producten,<br>
        zodat we chef-koks kunnen voorzien van alle benodigde ingrediënten, en Winkels van aardappels, verse kruiden en  <br>
        vergeten groenten. Elke dag zijn wij alleen maar op zoek naar de beste kwaliteit. Zo is elke<br>
        kok en elke winkel die bij de horecagroothandel onze groenten en fruit koopt, verzekerd van topproducten<br>
        om de mooiste gerechten mee te maken, en alle klanten mee blij te maken. Onze doelstelling <br>
        is om de producten zo snel mogelijk te leveren bij onze klanten, waardoor de <br>
        smaak en kwaliteit optimaal behouden blijft.</p>
</div>

<div id="homeaanbodwrapper">
    <div id="homeaanbod">
        <h2>Nieuwsgierig als bedrijf naar ons aanbod?<br>
            <br>
            <b>Meld uw bedrijf aan</b>
        </h2>

        <button id="homeaanbodbutton" onclick="location.href='registreren.php';">Aanmelden</button>
    </div>
</div>

<footer>
    <p>Copyright &copy; 2021 <i>'t Fruithuisje</i> alle rechten voorbehouden.</p>
</footer>




</body>
</html>