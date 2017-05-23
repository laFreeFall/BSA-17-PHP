<?php
/**
 * Created by PhpStorm.
 * User: chikaldirick
 * Date: 23.05.2017
 * Time: 12:34
 */

namespace BinaryStudioAcademy\Task1;


class Bulbasaur implements Pokemon
{
    public function battleCry(): string {
        return 'Bool bool!';
    }
    public function imageUrl(): string {
        return 'https://img.pokemondb.net/artwork/bulbasaur.jpg';
    }
}