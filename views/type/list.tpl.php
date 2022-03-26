<div class="container">

  <h3 class="margin-inline:auto text-align:center">Cliquez sur un type pour voir tous les pokemons de ce type</h3>

  <div class="grid margin-block-start">
    <?php foreach ($viewVars['typeList'] as $type) : ?>
      <a class="button text-align:center color:white" href="./type_pokemons?type_id=<?= $type->getId() ?>" style="background-color: #<?= $type->getColor() ?>;"><?= $type->getName() ?></a>
    <?php endforeach; ?>
  </div>
  <div class="margin-block-start text-align:center">
    <a class="color:white" href="./">Retour Pokedex</a>
  </div>
</div>