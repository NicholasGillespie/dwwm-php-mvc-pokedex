# Bienvenue à mon projet Pokedex suivant le model MVC

Ceci est une app structuré suivant un modèle _très simpliste_ de **MVC**. Naviguant a travers le site vous pourez visualiser :

1.  la liste de tous les pokemons.
2.  le détail des specificités de chanqu'un des pokemons.
3.  le types de chanqu'un des pokemons.
4.  filter les pokemons par types.

## Front-Controller / Router

Grâce aux configurations du fichier .htaccess, toutes les requêtes sont dirigées vers le fichier index.php ; autrement connu comme "**front-controller**".

Au lieu de diriger les URLs à des fichiers spécifiques, les URLs dirigent à des **controllers** et des **actions**.

## Controller et Actions

Les **controllers** sont ce avec quoi l'utilisateur interagit.

Donc, ski spass! :

1.  L'utilisateur rentre un URL, et donc...
2.  le router match cet URL (query string...) à une route nous retournant un controller et une action.

Simplement, les **controllers** sont des classes PHP. Ils contient des methodes qui sont les "**actions**"

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

Cette interaction se fait via

1.  Les controllers reçoivent une demande de l'utilisateur via la query string,
2.  cette demande est trié par le router. Le router fait correspondre l'URL à un contrôleur,
3.  décident quoi en faire, puis renvoient une réponse.

Le fichier .htaccess permet de rediriger toutes les requêtes HTTP vers le fichier index.php ce qui nous de permet de n'avoir qu'un seul point d'entrée
index.php est le FrontController

_simple_ blog, suivant les principes du **CRUD**, permettant de :

1.  Créer un article incluant : titre, date, catégorie, contenu et image.
2.  Lire/afficher des articles.
3.  Mettre à jour toutes les informations si nécessaire des articles.
4.  Supprimer des articles.

Vous pouvez voir à quoi ressemble la page d'accueil visitant : [home page](wireframe/page_home_desktop.pdf)

Pour info, pour accéder aux options de création, mise à jour et de suppression, il faut être connecté via le panneau d'administration; **nécessitant vérification utilisateur/mots de passe**. _Voir ci-dessous pour plus de détails._

## Pour commencer à utiliser l'application

1.  Téléchargez l'appli, soit directement, soit en clonant le repo : (https://github.com/NicholasGillespie/dwwm-php-pdo-blog.git).
2.  A même MySQL/MariaDB, utilisant [query.sql](sql/query.sql), créer une base de données.
3.  Configurez les données de configuration de votre DB dans le fichier [config.php](config.php) :
    `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS`.
4.  Configurez les données de configuration de votre SMTP dans le fichier [config.php](config.php):
    `SMTP_HOST`, `SMTP_USER`, `SMTP_PASS`.

_Couvrant le sujet de configuration SMTP pour Gmail, je me permets de joindre des informations supplémentaires qui pourraient potentiellement vous intéresser :
(https://support.google.com/a/answer/176600)
(https://youtu.be/QUWDC1ZjMHA)_

## Authentification administrateur

Nom d'utilisateur par défaut pour l'administrateur : **niko**.
Mot de passe par défaut pour l'administrateur : **123**.

A savoir : le mot de passe est haché.
L'authentification est faite à l'aide de la fonction php : [`password_verify()`](https://www.php.net/manual/en/function.password-verify.php).

Si souhaité, vous pouvez changer le nom d'utilisateur 'admin 'directement à même la base de données; voir créer un autre compte. Vous pouvez également changer votre mot de passe, ainsi que le hashé en utilisant un générateur comme celui ci-joint : (https://php-password-hash-online-tool.herokuapp.com/password_hash).

## Errors

A même [config.php](config.php), si la configuration `SHOW_ERROR_DETAIL` est défini à `true`, un rapport détaillé sera afficher à même le navigateur en cas d'erreurs. Si la configuration est défini à `false`, un message d'erreur générique sera afficher.

## _That's all folks!_
