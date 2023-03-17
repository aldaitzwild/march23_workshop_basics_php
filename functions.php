<?php

function sayHello(string $name = 'Bulbi') : string
{
    return "Hello $name !";
}


function fight(string $pokemon1, string $pokemon2, array $pokemonList) : string
{
    $typePokemon1 = $pokemonList[$pokemon1];
    $typePokemon2 = $pokemonList[$pokemon2];

    if ($typePokemon1 === $typePokemon2)
        return "Match Nul";

    if(
        ($typePokemon1 === 'Feu' && $typePokemon2 === 'Plante') ||
        ($typePokemon1 === 'Plante' && $typePokemon2 === 'Eau') ||
        ($typePokemon1 === 'Eau' && $typePokemon2 === 'Feu')
    ) {
        return "Pokemon 1 ($pokemon1) a gagné !";
    }

    return "Pokemon 2 ($pokemon2) a gagné !";
}


//This is the second solution to write if you don't simplify your array
function fightWayMoreComplex(string $pokemon1, string $pokemon2, array $pokemonTypesList) : string
{
    $typePokemon1 = '';
    $typePokemon2 = '';

    foreach ($pokemonTypesList as $type =>$pokemonType) {
        if(in_array($pokemon1, $pokemonType)) {
            $typePokemon1 = $type;
            break;
        }
    }

    foreach ($pokemonTypesList as $type =>$pokemonType) {
        if(in_array($pokemon2, $pokemonType)) {
            $typePokemon2 = $type;
            break;
        }
    }

    if ($typePokemon1 === $typePokemon2)
        return "Match Nul";

    if(
        ($typePokemon1 === 'Feu' && $typePokemon2 === 'Plante') ||
        ($typePokemon1 === 'Plante' && $typePokemon2 === 'Eau') ||
        ($typePokemon1 === 'Eau' && $typePokemon2 === 'Feu')
    ) {
        return "Pokemon 1 ($pokemon1) a gagné !";
    }

    return "Pokemon 2 ($pokemon2) a gagné !";
}