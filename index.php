<?php
$input1 = rand(0,15);
$input2 = rand(0,15);
function result($number1 , $number2){
  if ($number1 > $number2){
    return 'Le premier nombre est plus grand';
  }elseif ($number1 < $number2){
    return 'Le premier nombre est plus petit';
  }elseif ($number1 == $number2){
    return 'Les deux nombres sont identiques';
  };
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>php part4 ex3</title>
      <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <p><?= $input1 ?></p>
    <p><?= $input2 ?></p>
  <p><?= result($input1,$input2); ?></p>
  </body>
</html>
