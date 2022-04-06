# Bienvenue à mon projet "Pokedex" suivant le model MVC

Model MVC / PDO

Ceci est une app structuré suivant un modèle _très simpliste_ de **MVC**. En parcourant le site, vous pourrez visualiser :

1.  la liste de tous les pokemons.
2.  le détail des specificités de chanqu'un des pokemons.
3.  les différents types de pokemons.
4.  et filter les pokemons par types.

## Front-Controller / Router

Grâce aux configurations du fichier [.htaccess](.htaccess), toutes les requêtes sont dirigées vers le fichier [index.php](index.php) ; autrement connu sous le nom de : "**front-controller / router**".

Au lieu de diriger les URLs à des fichiers spécifiques, les URLs dirigent à des **controllers** et des **actions**.

```php
if ($url === '/') { // home
  $pokemonController->selectAllAction();
} else if ($url === '/pokemon') { // pokemon detail page
  $pokemonController->selectOneAction();
} else if ($url === '/types') { // all types page
  $typeController->selectAllAction();
} else if ($url === '/type_pokemons') { // by type page
  $typeController->selectOneAction();
} else {
  http_response_code(404);
}
```

## Controller et Actions

Les **controllers** sont ce avec quoi l'utilisateur interagit.

Donc ce qui se passe c'est :

1.  L'utilisateur rentre un URL,
2.  le router match cet URL ( + query string...) à une route retournant un **controller** et une **action**.

**Simplement** : les controllers sont des classes PHP. Ils contiennent des methodes qui sont eux les "actions"

```php
class MainController
{
  public function show($viewName, $viewVars = [])
  {
    include __DIR__ . '/../views/layout/header.tpl.php';
    include __DIR__ . '/../views/' . $viewName . '.tpl.php';
    include __DIR__ . '/../views/layout/footer.tpl.php';
  }
}
```

```php
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
}
```

## Views

Les **views** sont ce que voit les utilisateurs. C'est donc la page web. Le HTML puis du PHP si cette page est supposé afficher des informations émanants de la base de données. Ces informations sont transmises via les directions des **actions**.

## Models

Les **models** sont où sont stockées les données de l'application. Ils sont le composant responsable du stockage et de la récupération des données.

```php
class Pokemon
{
  private $id;
  private $nom;

  public function __construct($id, $nom)
  {
    $this->id = $id;
    $this->nom = $nom;
  }

  /* set the value of an id */
  public function getId()
  {
    return $this->id;
  }

  /* get the value of an id */
  public function setId($id): self
  {
    $this->id = $id;

    return $this;
  }
}
```

## _That's all folks!_
