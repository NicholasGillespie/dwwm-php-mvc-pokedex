<?php
class DBData
{
  private $pdo;
  public function __construct()
  {
    $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
    $username = 'root';
    $password = '';

    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];
    $this->pdo = new PDO($dsn, $username, $password, $options);
  }


  // SELECT ALL POKEMONS
  public function getAllPokemons()
  {
    $sql = "
            SELECT *
            FROM pokemon
        ";

    $pokemonArrayOfAssoc = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $pokemonArrayOfObject = [];

    foreach ($pokemonArrayOfAssoc as $pokemon) {
      $pokemonArrayOfObject[] = new Pokemon(
        $pokemon['id'],
        $pokemon['nom'],
        $pokemon['pv'],
        $pokemon['attaque'],
        $pokemon['defense'],
        $pokemon['attaque_spe'],
        $pokemon['defense_spe'],
        $pokemon['vitesse'],
        $pokemon['numero'],
        $this->getTypesByPokemon($pokemon['numero'])
      );
    }
    return $pokemonArrayOfObject;
  }


  // SELECT POKEMON BY ID
  public function getOnePokemon($id)
  {
    $sql = "
            SELECT *
            FROM pokemon
            WHERE id = $id
        ";

    $pokemonAssoc = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    $pokemonObject = new Pokemon(
      $pokemonAssoc['id'],
      $pokemonAssoc['nom'],
      $pokemonAssoc['pv'],
      $pokemonAssoc['attaque'],
      $pokemonAssoc['defense'],
      $pokemonAssoc['attaque_spe'],
      $pokemonAssoc['defense_spe'],
      $pokemonAssoc['vitesse'],
      $pokemonAssoc['numero'],
      $this->getTypesByPokemon($pokemonAssoc['numero'])
    );

    return $pokemonObject;
  }


  // SELECT ALL TYPES
  public function getAllTypes()
  {
    $sql = "
            SELECT *
            FROM type
        ";

    $typeArrayOfAssoc = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $typeArrayOfObject = [];

    foreach ($typeArrayOfAssoc as $type) {
      $typeArrayOfObject[] = new Type(
        $type['id'],
        $type['name'],
        $type['color'],
        $this->getTypesByPokemon($type['id'])
      );
    }

    return $typeArrayOfObject;
  }


  // SELECT POKEMON BY TYPE ID
  public function getPokemonByType($id)
  {
    $sql = "
            SELECT *
            FROM pokemon_type
            JOIN pokemon ON pokemon.numero = pokemon_numero
            WHERE pokemon_type.type_id = $id
        ";

    $typeOfOnePokemonAssoc = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    $typeOfOnePokemonObject = [];

    foreach ($typeOfOnePokemonAssoc as $pokemon) {
      $typeOfOnePokemonObject[] = new Pokemon(
        $pokemon['id'],
        $pokemon['nom'],
        $pokemon['pv'],
        $pokemon['attaque'],
        $pokemon['defense'],
        $pokemon['attaque_spe'],
        $pokemon['defense_spe'],
        $pokemon['vitesse'],
        $pokemon['numero']
      );
    }
    return $typeOfOnePokemonObject;
  }



  public function getTypesByPokemon($id)
  {
    $sql = "
            SELECT *
            FROM pokemon_type
            JOIN type ON type.id = pokemon_type.type_id
            WHERE pokemon_type.pokemon_numero = $id
        ";

    $PokemonByTypeAssoc = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    $PokemonByTypeObject = null;

    foreach ($PokemonByTypeAssoc as $type) {
      $PokemonByTypeObject[] = new Type($type['id'], $type['name'], $type['color']);
    }
    return $PokemonByTypeObject;
  }



  public function getOneType($id)
  {
    $sql = "
            SELECT *
            FROM type
            WHERE id = $id
        ";

    $typeAssoc = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    $typeObject = new Type($typeAssoc['id'], $typeAssoc['name'], $typeAssoc['color'], $this->getPokemonByType($typeAssoc['id']));
    return $typeObject;
  }
}
