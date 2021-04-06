<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>

<body>

<?php
    $data = file_get_contents('data.json');
    $array = json_decode($data, true);

    echo '<p>There are ' . $array['count']. ' pokemons in this list.</p><br>';

    $chunks = array_chunk($array['results'], 50, true);

    // i defines which chunk is displayed

    $page = htmlspecialchars($_GET["page"]);
    $pagesCount = floor($array['count']/50);

if ($page > -1 && $page <= $pagesCount) {
    $i = $page;
} else if ($page > $pagesCount || $page <0) {
    echo 'You requested page that does not exist. There are only ' . $pagesCount . ' pages of pokemons. ' .  '<br>';
} else {
    $i = 2;
}

$index = ($i * 50);

    foreach($chunks[$i] as $pokemon) {
        echo '<pre>';
        echo 'Name: ' . $pokemon['name'] . '<br>' . 'Index number: ' . $index . '<br>' . 'URL: ' . $pokemon['url'];
        echo '</pre>';
        $index ++;
    }

?>

</body>

</html>