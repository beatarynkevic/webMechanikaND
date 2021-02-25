<!DOCTYPE html>
<html lang="en">

<?php
 if (!isset($_POST['post'])){
   header("Location: ./pink.php");
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