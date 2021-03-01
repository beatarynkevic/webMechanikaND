<?php
$color ='#000';
$rand = rand(3,10);
$letters = rand('A', 'J');
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = '#fff';
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
<body style="background:<?= $color?>">

<?php if($_SERVER['REQUEST_METHOD'] !== 'POST') : ?>

<form action="" method="post">
    <!-- alternatyvi if sintekse. : ir endforeach vietoj {} -->
    <?php foreach($letters as $key => $letter) : ?>
    <?php if($key + 1 > $rand) break ?>
    <span style="color:pink;">
        <?= $letter ?>
    </span>
    <input type="checkbox" name="letters[]" value="<?= $letter ?>">
    <?php endforeach ?>
    <button type="submit" name='nmg'>MYGTUKAS</button>
</form>

<?php else: ?>
    <h1> <?= count($_POST) ?> </h1>
<?php endif ?>
    
</body>
</html>