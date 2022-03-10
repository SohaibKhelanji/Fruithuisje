<?php
session_start();
require_once 'inc/db.inc.php';

if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['winkelwagen'])) {

        $session_array_id = array_column($_SESSION['winkelwagen'], "id");

       if (!in_array($_GET['id'], $session_array_id)) {
           $session_array = array(
               'id' => $_GET['id'],
               'naam' => $_POST['naam'],
               'prijs' => $_POST['prijs'],
               'kwantiteit' => $_POST['kwantiteit']
           );

           $_SESSION['winkelwagen'][] = $session_array;

       }
    }
    else {
        $session_array = array(
            'id' => $_GET['id'],
            'naam' => $_POST['naam'],
            'prijs' => $_POST['prijs'],
            'kwantiteit' => $_POST['kwantiteit']
        );

        $_SESSION['winkelwagen'][] = $session_array;

    }
}
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

    <title>'t Fruithuisje - Winkelmandje</title>
</head>

<body>

<div id="loginlogosection">
    <img onclick="location.href='bestellen.php';" src="img/logo.png" alt="website logo" style="cursor: pointer;">

</div>

<div id="winkelwagenwrapper">
<div id="winkelwagenheader">
    <h1>Winkelwagen</h1>
</div>

    <div id="winkelwagen">
 <?php
 $total = 0;
$output = "";
$output .= "
    <table> 
    <tr>
    <h3>Product id</h3>
    <h3>Product naam</h3>
    <h3>Product prijs</h3>
    <h3>Kwantiteit</h3>
    <h3>Totale prijs</h3>
    <h3>Actie</h3>
    

</tr>
    </table>
    <br>
";

 if(!empty($_SESSION['winkelwagen'])) {

        foreach ($_SESSION['winkelwagen'] as $key => $value) {

            $normaleprijs = number_format($value['prijs'], 2);
            $normaleprijstotaal = number_format($normaleprijs * $value['kwantiteit'], 2);
            $totaleprijs= number_format( 0 + $value['kwantiteit'] * $value['prijs'], 2);



            if (isset($_SESSION["userid"])) {
                if ($_SESSION["userdiscount"] === null) {
                    $kortingprijs = $normaleprijs;
                } else {
                    $kortingprijs = number_format($normaleprijs * $_SESSION["userdiscount"], 2);
                }
            }

            if (isset($_SESSION["userid"])) {
                $totaleprijs= 0 + $value['kwantiteit'] * $kortingprijs;

                $output .= "
            <tr> 
            <td>" . $value['naam'] . "</td>
            <td>€" . $kortingprijs . "</td>
            <td>" . $value['kwantiteit'] . "</td>
            
            <td> €" . number_format($kortingprijs * $value['kwantiteit'], 2) . "</td>
            </td>
            <a href='winkelmandje.php?action=remove&id=" . $value['id'] . "'
            <button>Verwijder</button>
             </a>
            </td>
            </tr>
            <br> 
            <br>
            
          
            ";
                $total = number_format($total + $value['kwantiteit'] * $kortingprijs, 2);
            }
          else {
              $output .= "
            <tr> 
            <td>" . $value['naam'] . "</td>
            <td>€" . $normaleprijs . "</td>
            <td>" . $value['kwantiteit'] . "x</td>
            
            <td> €" . $normaleprijstotaal . "</td>
           
            <td>
            <a href='winkelmandje.php?action=remove&id=" . $value['id'] . "'
            <button>Verwijder</button>
             </a>
            </td>
            </tr>
           <br>
            ";

              $total = number_format($total + $value['kwantiteit'] * $normaleprijs, 2);
          }

        }
     $output .= "
              <p>Totale prijs: €$total </p>
              ";

     echo $output;
}

 elseif (empty($_SESSION['winkelwagen'])) {
     echo 'U heeft nog niks in uw winkelwagen';
 }


if (isset($_GET['action'])) {

    if ($_GET['action'] == "remove") {
        foreach ($_SESSION['winkelwagen'] as $key => $value) {
            if ($value['id'] == $_GET['id'] ) {
                unset($_SESSION['winkelwagen'][$key]);
            }
        }

    }
}

 ?>

    </div>
</div>


<?php

 if (!empty($_SESSION['winkelwagen'])) {


     echo '<div id = "bestelformulier" >

    <form action = "inc/mail.inc.php" method = "post" >
        <input type = "text" name = "email" placeholder = "Email" id = "email" required >
        <input type = "text" name = "naam" placeholder = "Volledige naam" id = "naam" required >
        <input type = "text" name = "straatnaam" placeholder = "Straatnaam en huisnummer" id = "straatnaam" required >
        <input type = "text" name = "plaats" placeholder = "Plaats en postcode" id = "plaats" required >
        <input type = "submit" name = "submit" value = "Bestellen" >

    </form >

</div >';
}
?>


</body>
</html>