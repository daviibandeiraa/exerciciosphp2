<?php
$bola = ["⚽", "⚾", "🏀", "🥎"];
$bola[4] = "🎱";
array_push($bola, "🏈");

//echo count($bola);

echo "<h1>Tipos de bolas</h1>";

$qtd = count($bola);

$contador = 0;

for($contador = 0; $contador <count($bola); $contador++){
    echo "$bola[$contador]";
}
?>