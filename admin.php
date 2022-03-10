<?php

session_start();

include_once 'inc/db.inc.php';

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
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">

    <title>'t Fruithuisje - Admin</title>
</head>

<body>


<div id="adminloguitbar">
  <a href="inc/loguit.inc.php">Log uit</a>

</div>

<div id="adminheader">

    <h1>Welkom admin</h1>
    <hr>
    <p>Prijs van product aanpassen</p>
</div>

<div id="adminform">
    <form action = "inc/admin.inc.php" method = "post" >
        <input type = "text" name = "id" placeholder = "Product ID" id = "id" required >
        <input type = "text" name = "prijs" placeholder = "Nieuwe prijs" id = "prijs" required >
        <input type = "submit" name = "updateprijzen" value = "Update" >

    </form >

</div>
<br>
<hr>
<div id="adminform">
    <p id="bedrijfskortingheader">Bedrijfskorting toepassen/aanpassen</p>
    <form action = "inc/admin.inc.php" method = "post" >
        <input type = "text" name = "id" placeholder = "Bedrijf ID" id = "id" required >
        <input type = "text" name = "korting" placeholder = "Korting" id = "korting" required >
        <input type = "submit" name = "updatekorting" value = "Update" >

    </form >

</div>
<br>
<hr>
<br>
<div id="adminform">
    <p id="bedrijfskortingheader">ID van product weergeven</p>
    <form action = "admin.php" method = "post" >
        <input type = "text" name = "prnaam" placeholder = "Productnaam" id = "prnaam" required >
        <?php
        if (isset($_POST['weergeefprid'])) {
            $sql = "SELECT prId FROM product WHERE prNaam='$_POST[prnaam]';";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo " <p id='adminidtext'>Product ID = " . $row["prId"] . "</p>";
                }
            } else {
                echo "Geen resultaten";
            }
        }
        ?>
        <input type = "submit" name = "weergeefprid" value = "Ophalen" >

    </form >
    <br>
    <hr>
    <br>
    <div id="adminform">
        <p id="bedrijfskortingheader">ID van bedrijf weergeven</p>
        <form action = "admin.php" method = "post" >
            <input type = "text" name = "naam" placeholder = "Bedrijfsnaam" id = "naam" required >
            <?php
            if (isset($_POST['weergeefid'])) {
                $sql = "SELECT zkID FROM zkklant WHERE zkBedrijfsnaam='$_POST[naam]';";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo " <p id='adminidtext'>Bedrijf ID = " . $row["zkID"] . "</p>";
                    }
                } else {
                    echo "Geen resultaten";
                }
            }
            ?>
            <input type = "submit" name = "weergeefid" value = "Ophalen" >

        </form >
        <br>
        <hr>
        <br>


</body>
</html>


