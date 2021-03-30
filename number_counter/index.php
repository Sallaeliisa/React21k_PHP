<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number counter</title>
</head>
<body>
    <?php

// Generate a random number

    $myNumber = rand(0, 1000);

// Counter

    if (0 <= $myNumber && $myNumber <= 10) {

  switch ($myNumber) {
    case 0:
      $result = "nolla";
      break;
    case 1:
      $result = "yksi";
      break;
    case 2:
      $result = "kaksi";
      break;
    case 3:
      $result = "kolme";
      break;
    case 4:
      $result = "neljä";
      break;
    case 5:
      $result = "viisi";
      break;
    case 6:
      $result = "kuusi";
      break;
    case 7:
      $result = "seitsemän";
      break;
    case 8:
      $result = "kahdeksan";
      break;
    case 9:
      $result = "yhdeksän";
      break;
    case 10:
      $result = "kymmenen";
      break;
    default:
      break;
  }
} else if (10 <= $myNumber && $myNumber <= 19) {
  $ones = $myNumber - 10;

switch ($ones) {
    case 1:
        $result = "yksi";
      break;
    case 2:
        $result = "kaksi";
      break;
    case 3:
        $result = "kolme";
      break;
    case 4:
        $result = "neljä";
      break;
    case 5:
        $result = "viisi";
      break;
    case 6:
        $result = "kuusi";
      break;
    case 7:
        $result = "seitsemän";
      break;
    case 8:
        $result = "kahdeksan";
      break;
    case 9:
        $result = "yhdeksän";
      break;
    default:
      break;
  }
  $result = $result . "toista";

} else if (20 <= $myNumber && $myNumber <= 99) {
    $tens = floor($myNumber / 10);
    $ones = $myNumber % 10;

  switch ($tens) {
    case 1:
        $result = "yksi";
      break;
    case 2:
        $result = "kaksi";
      break;
    case 3:
        $result = "kolme";
      break;
    case 4:
        $result = "neljä";
      break;
    case 5:
        $result = "viisi";
      break;
    case 6:
        $result = "kuusi";
      break;
    case 7:
        $result = "seitsemän";
      break;
    case 8:
        $result = "kahdeksan";
      break;
    case 9:
        $result = "yhdeksän";
      break;
    default:
      break;
  }
  $result = $result . "kymmentä";

  switch ($ones) {
    case 1:
      $result = $result . "yksi";
      break;
    case 2:
        $result = $result . "kaksi";
      break;
    case 3:
        $result = $result . "kolme";
      break;
    case 4:
        $result = $result . "neljä";
      break;
    case 5:
        $result = $result . "viisi";
      break;
    case 6:
        $result = $result . "kuusi";
      break;
    case 7:
        $result = $result . "seitsemän";
      break;
    case 8:
        $result = $result . "kahdeksan";
      break;
    case 9:
        $result = $result . "yhdeksän";
      break;
    default:
      break;
  }
} else if ($myNumber == 100) {
    $result = "sata";
} else if (101 <= $myNumber && $myNumber <= 999 && 11 <= $myNumber % 100 &&
$myNumber % 100 <= 19) {
    $hundreds = floor($myNumber / 100);

  switch ($hundreds) {
    case 1:
        $result = "sata";
      break;
    case 2:
        $result = "kaksisataa";
      break;
    case 3:
        $result = "kolmesataa";
      break;
    case 4:
        $result = "neljäsataa";
      break;
    case 5:
        $result = "viisisataa";
      break;
    case 6:
        $result = "kuusisataa";
      break;
    case 7:
        $result = "seitsemänsataa";
      break;
    case 8:
        $result = "kahdeksansataa";
      break;
    case 9:
        $result = "yhdeksänsataa";
      break;
    default: 
      break;
  }
  switch ($myNumber % 100) {
    case 11:
        $result = $result . "yksitoista";
      break;
    case 12:
        $result = $result . "kaksitoista";
      break;
    case 13:
        $result = $result . "kolmetoista";
      break;
    case 14:
        $result = $result . "neljätoista";
      break;
    case 15:
        $result = $result . "viisitoista";
      break;
    case 16:
        $result = $result . "kuusitoista";
      break;
    case 17:
        $result = $result . "seitsemäntoista";
      break;
    case 18:
        $result = $result . "kahdeksantoista";
      break;
    case 19:
        $result = $result . "yhdeksäntoista";
      break;
    default:
      break;
  }
} else if (101 <= $myNumber && $myNumber <= 999) {
    $hundreds = floor($myNumber / 100);
    $tens = floor(($myNumber % 100) / 10);
    $ones = $myNumber % 10;

  switch ($hundreds) {
    case 1:
        $result = "sata";
      break;
    case 2:
        $result = "kaksisataa";
      break;
    case 3:
        $result = "kolmesataa";
      break;
    case 4:
        $result = "neljäsataa";
      break;
    case 5:
        $result = "viisisataa";
      break;
    case 6:
        $result = "kuusisataa";
      break;
    case 7:
        $result = "seitsemänsataa";
      break;
    case 8:
        $result = "kahdeksansataa";
      break;
    case 9:
        $result = "yhdeksänsataa";
      break;
    default:
      break;
  }

  switch ($tens) {
    case 1:
        $result = $result . "kymmenen";
      break;
    case 2:
        $result = $result . "kaksikymmentä";
      break;
    case 3:
        $result = $result . "kolmekymmentä";
      break;
    case 4:
        $result = $result . "neljäkymmentä";
      break;
    case 5:
        $result = $result . "viisikymmentä";
      break;
    case 6:
        $result = $result . "kuusikymmentä";
      break;
    case 7:
        $result = $result . "seitsemänkymmentä";
      break;
    case 8:
        $result = $result . "kahdeksankymmentä";
      break;
    case 9:
        $result = $result . "yhdeksänkymmentä";
      break;
    default:
      break;
  }

  switch ($ones) {
    case 1:
        $result = $result . "yksi";
      break;
    case 2:
        $result = $result . "kaksi";
      break;
    case 3:
        $result = $result . "kolme";
      break;
    case 4:
        $result = $result . "neljä";
      break;
    case 5:
        $result = $result . "viisi";
      break;
    case 6:
        $result = $result . "kuusi";
      break;
    case 7:
        $result = $result . "seitsemän";
      break;
    case 8:
        $result = $result . "kahdeksan";
      break;
    case 9:
        $result = $result . "yhdeksän";
      break;
    default:
      break;
  }
} else {
    $result = "tuhat";
}

// Get result

echo $myNumber;
    echo "<br>";
echo $result;
    ?>
</body>
</html>