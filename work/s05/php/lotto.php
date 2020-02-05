<?php

/*
page controller
*/

$userRow = $_GET["row"] ?? null;
$userRowArr = explode(",", $userRow);

// echo <pre>;
// var_dump($_GET);



$lotto = [];

for ($i = 1; $i < 8; $i++){
    $lotto[] = rand(1, 35);
}

//echo "<p>in the parser</p>";

sort($lotto);

require __DIR__ . "/view/lotto.php"




?>



