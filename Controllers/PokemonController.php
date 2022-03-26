<?php

class PokemonController extends MainController
{
    public function selectAllAction()
    {
        $DBCon = new DBData();

        $pokemonList = $DBCon->getAllPokemons();

        return $this->show('home', [
            'pokemonList' => $pokemonList
        ]);
    }

    public function selectOneAction()
    {
        $DBCon = new DBData();

        $pokemon = $DBCon->getOnePokemon($_GET['pokemon_id']);

        return $this->show('detail', [
            'pokemon' => $pokemon
        ]);
    }
}