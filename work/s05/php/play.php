<?php

echo "<h1>hello</h1>";

$var = 2;
$msg = "mumintrollet";

echo "you know " . $msg . " " . $var;

$die = rand(1, 6);

if($die > 1){
    echo "<p>good roll...</p>";
}

echo "You rolled a '$die'.";

$lotto = [];

for ($i = 1; $i < 7; $i++){
    $lotto[] = rand(1, 35);
}

//var_dump($lotto);



