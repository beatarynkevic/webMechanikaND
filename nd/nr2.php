<!-- Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite,
URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nr2</title>
</head>
<body 
    <?php
    if(isset($_GET['color'])) {
        echo "style='background-color: #". $_GET['color'].";'";
    }
    ?>
    >
    <a style="color:#fff"; href="nr2.php">Index</a>
</body>
</html>