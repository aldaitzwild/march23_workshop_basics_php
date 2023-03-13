<?php

include 'header.php';

function displayMessage(string $message) 
{
    echo $message . "<br>";
}


displayMessage('Hello Bulbi');

$trainerName = 'Sacha';
displayMessage($trainerName);

$pokemonName = 'Ronflex';
displayMessage($pokemonName);


$pokemonLevel = 1;
$isPokemonKO = false;

$pokemonName = 'Pikachu';
displayMessage($pokemonName);

$pokemonLevel++;
displayMessage('Niveau : ' . $pokemonLevel);

$hometown = "BourgPalette";
displayMessage($hometown);

$presentation =  "Je m'appelle $trainerName";
$pokemonPresentation = 'mon premier Pokemon est ' . $pokemonName . '. Où est l\'première arène svp ?';

displayMessage("$presentation et $pokemonPresentation");

$firstArena = 'Argenta';
require 'arena.php';
include 'footer.php';