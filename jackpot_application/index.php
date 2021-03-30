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

$i = 0;
$roundsTotal = 0;

// while (i <= 4) {
//   $i++;
$rounds = 0;

  while (true) {
    $counter0 = 0;
    $counter1 = 0;

    $numbers = array(rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5));

    echo $numbers[0] . ", " . $numbers[1] . ", " . $numbers[2] . ", " . $numbers[3] . ", " . $numbers[4];

    switch ($numbers[0]) {
      case 0:
        $counter0 += 1;
        break;
      case 1:
        $counter1 += 1;
        break;
        default:
        break;
    }
    switch ($numbers[1]) {
      case 0:
        $counter0 += 1;
        break;
      case 1:
        $counter1 += 1;
        break;
        default:
        break;
    }
    switch ($numbers[2]) {
      case 0:
        $counter0 += 1;
        break;
      case 1:
        $counter1 += 1;
        break;
      default:
        break;
    }
    switch ($numbers[3]) {
      case 0:
        $counter0 += 1;
        break;
      case 1:
        $counter1 += 1;
        break;
        default:
        break;
    }
    switch ($numbers[4]) {
      case 0:
        $counter0 += 1;
        break;
      case 1:
        $counter1 += 1;
        break;
        default:
        break;
    }
    $rounds += 1;

    echo "<br>";
    echo $counter0;
    echo "<br>";
    echo $counter1;


//     rounds += 1;
//     roundsTotal += 1;

    if ($counter0 == 5) {
      echo "Congratulations! You got all five 0s.";
    } else if (3 < $counter1 && $counter1 < 5) {
      echo "Congratulations! You got " . $counter1 . " 1s. You win a small prize.";
    }else if ($counter1 == 5) {
      echo "Congratulations! You win the jackpot! It took " . $rounds . " rounds.";
      break;
    }
  }
  
// let roundsAverage = Math.round(roundsTotal / 5);
// let cost = roundsAverage * 0.5

// console.log(
//   "It takes " + roundsAverage + " rounds on average to win the jackpot. " + roundsAverage +
//   " rounds cost " + cost + " €.");

//   if (cost > 30000) {
//       console.log("You make " + (cost - 30000) + " € loss.")
//   } else {
//       console.log("You make " + (30000 - cost) + " € profit.")
//   }

  ?>
  </body>
</html>