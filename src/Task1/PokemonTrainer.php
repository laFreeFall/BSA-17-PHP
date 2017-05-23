<?php

namespace BinaryStudioAcademy\Task1;

use ReflectionClass;

class PokemonTrainer
{
    public function pick(Pokemon $pokemon): string
    {
        $pokemonReflection = new ReflectionClass($pokemon);
        return $pokemonReflection->getShortName() . ': ' . $pokemon->battleCry();
    }
}
