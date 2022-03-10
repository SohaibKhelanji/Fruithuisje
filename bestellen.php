<?php
require_once 'inc/db.inc.php';
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

    <title>'t Fruithuisje - Bestellen</title>
</head>

<body>

<div id="mainnavigation">
    <div id="navigation">
        <nav>
            <ul>
                <a href="index.php">Home</a>
                <a href="bestellen.php" style="color: green">Bestellen</a>
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


<div id="bestellengridwrapper">

<?php

$query = "SELECT * FROM product;";
$result = mysqli_query($conn, $query);

While ($row = mysqli_fetch_array($result)) {?>

    <div id="bestellengrid">
    <form method="post" action="winkelmandje.php?id=<?=$row['prId']?>">
        <img src="img/<?=$row['prFoto']?>" style='height: 190px;width: auto'>
        <h3><?=$row['prNaam'];?></h3>
        <?php

        $normaleprijs = $row['prPrijs'];


        if (isset($_SESSION["userid"])) {
            if ($_SESSION["userdiscount"] === null) {
                $kortingprijs = $row['prPrijs'];
            }
            else {
                $kortingprijs = number_format($row['prPrijs'] * $_SESSION["userdiscount"], 2);
            }
         echo "<h4>€$kortingprijs</h4>";
        }
        else {
        echo "<h4>€$normaleprijs</h4>";
        }?>
        <input type="hidden" name="naam" value="<?=$row['prNaam'];?>">
        <input type="hidden" name="prijs" value="<?=$row['prPrijs'];?>">
        <input type="number" name="kwantiteit" value="1">
        <input type="submit" name="add_to_cart" value="+ In winkelmandje">




    </form>
    </div>




<?php  }



?>
</div>


<footer>
    <p>Copyright &copy; 2021 <i>'t Fruithuisje</i> alle rechten voorbehouden.</p>
</footer>


</body>
</html>