<?php

include_once('functions.php');

echo "<html lang='pt-br'>";

$dados = youtube_data("input.txt");

var_dump($dados);
echo "<br><br>";

foreach($dados as $array){
    foreach($array as $dado){
        echo "{$dado}<br>";
    }
    echo "<br>";
}
