<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jackpot</title>
</head>
<body>
  
<?php

$roundsTotal = 0;

 function jackpot() {
  $rounds = 0;

    while (true) {
    $counter0 = 0;
    $counter1 = 0;

    $numbers = array(rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5));

    echo $numbers[0] . ", " . $numbers[1] . ", " . $numbers[2] . ", " . $numbers[3] . ", " . $numbers[4];

    for ($i = 0; $i < 5; $i++) {
    switch ($numbers[$i]) {
      case 0:
        $counter0 += 1;
        break;
      case 1:
        $counter1 += 1;
        break;
      }
    }
 
    $rounds += 1;
    $GLOBALS['roundsTotal'] += 1;
    echo "<br>";

    if ($counter0 == 5) {
      echo "Congratulations! You got all five 0s.";
      echo "<br>";
    } else if (3 < $counter1 && $counter1 < 5) {
      echo "<br>";
      echo "Congratulations! You got " . $counter1 . " 1s. You win a small prize.";
    }else if ($counter1 == 5) {
      echo "<br>";
      echo "Congratulations! You win the jackpot! It took " . $rounds . " rounds.";
      break;
    }
  }
}

jackpot();
jackpot();
jackpot();
jackpot();
jackpot();
  
$average = round($roundsTotal / 5);
$money = $average * 0.5;
$profit = 30000 - $money;

echo "<br>";
echo "It takes {$average} rounds on average to win the jackpot. {$average} rounds cost {$money} €." ;
echo "<br>";

  if ($money > 30000) {
      echo "You make {$profit} € loss.";
  } else {
      echo "You make {$profit} € profit.";
  }

  ?>
  </body>
</html>