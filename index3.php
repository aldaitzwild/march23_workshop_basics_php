<?php

require 'functions.php';

$myName = "Thomas";

echo sayHello($myName);
echo sayHello("Ludo");
echo sayHello() .PHP_EOL;

/*
$pokemonList = [
    'Plante' => ['Bulbizarre', 'Mystherbe', 'Chétiflor'],
    'Eau' => ['Carapuce', 'Stari', 'Magicarpe'],
    'Feu' => ['Salamèche'],
    'Sol' => ['Sabelette', 'Taupiqueur'],
];
*/

$pokemonList = [
    'Bulbizarre' => 'Plante',
    'Mystherbe' => 'Plante',
    'Chétiflor' => 'Plante',
    'Carapuce' => 'Eau',
    'Stari' => 'Eau',
    'Magicarpe' => 'Eau',
    'Salamèche' => 'Feu',
    'Sabelette' => 'Sol',
    'Taupiqueur' => 'Sol',
];

echo fight('Chétiflor', 'Mystherbe', $pokemonList);