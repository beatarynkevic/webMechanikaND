<?php

_d($_GET);
if(isset($_GET['nuoroda'])) {
    header('Location: http://localhost/darbasSuFailais/nd/nr5/red.php');
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: blue;">
<a style="color:white;" href="?nuoroda=1">BLUE</a>  <! --nuoroda i save -->
    
</body>
</html>


<!-- Sukurkite du atskirus puslapius blue.php ir red.php
Juose sukurkite linkus į pačius save (abu į save ne į kitą puslapį!).
Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų,
o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį
(iš raudono į mėlyną ir atvirkščiai). -->
