<div class="container">
  <div class="grid">
    <?php foreach ($viewVars['pokemonList'] as $pokemon) : ?>
      <a class="opacity-link" href="./pokemon?pokemon_id=<?= $pokemon->getId() ?>">
        <div class="card background-color:white">
          <img src="./public/img/<?= $pokemon->getNumero() ?>.png" alt="<?= $pokemon->getNom() ?>">
          <p class="text-align:center"># <?= $pokemon->getNumero() . ' ' . $pokemon->getNom() ?></p>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</div>