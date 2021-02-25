<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 9</title>

  <?php
  if (empty($_POST)){
    $bgcolor = '000';
    $color = 'fff';
  } else {
    $bgcolor = 'fff';
    $color = '000';
  }
  ?>
</head>

<body style="background: #<?= $bgcolor ?>; color: #<?= $color ?>;">
  <?php
    function form(){

      $choiceCount = rand(3,10);
      $abece = 'ABCDEFGHIJ';

      foreach(range(1,$choiceCount) as $key => $_){
        echo "<input type='checkbox' name=$abece[$key]>";
        echo "<label for=$abece[$key]>$abece[$key]</label>";
        echo '<br>';
      }
    }
  ?>
  <?php
     if (empty($_POST)){
      echo "<form action=\"\" method='post'>";
      form(); 
      echo '<br>';
      echo "<button type='submit'>Clickity click</button>";
      echo "</form>";
    } else {
      echo "Checkity check: " . count($_POST) . '<br>';
   }
    ?>
</body>

</html>

<!-- Padarykite taip, kad paspaudus mygtuką, 
  fono spalva pasikeistų į baltą, 
  forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). -->