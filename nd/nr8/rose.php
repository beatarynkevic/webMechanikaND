<!DOCTYPE html>
<html lang="en">

<?php
//  if (isset($_GET['get'])){
//    header("Location: ./pink.php");
//    die;
//  }

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header ("Location: ./pink.php");
  die;
}
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rose</title>
</head>

<body style="background: #FF66CC">
  <form action="" method="get">
    <button type="submit" name="get">GET</button>
  </form>
</body>

</html>