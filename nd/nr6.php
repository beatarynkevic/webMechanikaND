<!-- 6 . 
Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST.
Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik tikrindami pačius masyvus, nuspalvinkite foną žaliai,
kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST. -->
<!-- 7 .
Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu. -->

<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $color = 'yellow';
// }
// if ($_SERVER['REQUEST_METHOD'] == 'GET'){
//     $color = 'green';
// }


if(isset($_GET['get'])) {
    $color = 'green';
}
if(isset($_POST['post'])) {
    $color = 'yellow';
    // header("Location: ./nr6.php");
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
<body style="background-color: <?= $color?>">
<form action="" method="get">
    <button type="submit" name="get">GET SMTHnG</button>
</form>

<form action="" method="post">
    <button type="submit" name="post">POST SMTHNG</button>
</form>

</body>
</html>