<?php


?>


<div class="container">
  <h1 class="text-align:center">Détails de <?= $viewVars['pokemon']->getNom() ?></h1>
  <div class="with-sidebar">
    <div class="margin-block:auto">
      <img class="margin-inline:auto" src="./public/img/<?= $viewVars['pokemon']->getNumero() ?>.png" alt="">
    </div>
    <div class="[ flow ][ card background-color:primary-dark ]">
      <h2># <?= $viewVars['pokemon']->getNumero() . ' ' . $viewVars['pokemon']->getNom() ?></h2>

      <div class="cluster">
        <?php foreach ($viewVars['pokemon']->getTypes() as $type) : ?>
          <a class="button color:white" style="background-color: #<?= $type->getColor() ?>;" href="./type_pokemons?type_id=<?= $type->getId() ?>"><?= $type->getName() ?></a>
        <?php endforeach; ?>
      </div>

      <h3>Statistiques</h3>
      <div class="switcher">
        <div class="cluster justify:space-between">
          <h3>PV</h3>
          <h3><?= $viewVars['pokemon']->getPv() ?></h3>
        </div>
        <div class="bar clr-stats-dark">
          <div class="bar clr-stats-light" style="height:24px;width: <?= 100 * $viewVars['pokemon']->getPv() / 255 ?>%;"></div>
        </div>
      </div>
      <div class="switcher">
        <div class="cluster justify:space-between">
          <h3>Attaque</h3>
          <h3><?= $viewVars['pokemon']->getAttaque() ?></h3>
        </div>
        <div class="bar clr-stats-dark">
          <div class="bar clr-stats-light" style="height:24px;width: <?= 100 * $viewVars['pokemon']->getAttaque() / 255 ?>%;"></div>
        </div>
      </div>
      <div class="switcher">
        <div class="cluster justify:space-between">
          <h3>Défense</h3>
          <h3><?= $viewVars['pokemon']->getDefense() ?></h3>
        </div>
        <div class="bar clr-stats-dark">
          <div class="bar clr-stats-light" style="height:24px;width: <?= 100 * $viewVars['pokemon']->getDefense() / 255 ?>%;"></div>
        </div>
      </div>
      <div class="switcher">
        <div class="cluster justify:space-between">
          <h3>Attaque Spé</h3>
          <h3><?= $viewVars['pokemon']->getAttaqueSpe() ?></h3>
        </div>
        <div class="bar clr-stats-dark">
          <div class="bar clr-stats-light" style="height:24px;width: <?= 100 * $viewVars['pokemon']->getAttaqueSpe() / 255 ?>%;"></div>
        </div>
      </div>
      <div class="switcher">
        <div class="cluster justify:space-between">
          <h3>Défense Spé</h3>
          <h3><?= $viewVars['pokemon']->getDefenseSpe() ?></h3>
        </div>
        <div class="bar clr-stats-dark">
          <div class="bar clr-stats-light" style="height:24px;width: <?= 100 * $viewVars['pokemon']->getDefenseSpe() / 255 ?>%;"></div>
        </div>
      </div>
      <div class="switcher">
        <div class="cluster justify:space-between">
          <h3>Vitesse</h3>
          <h3><?= $viewVars['pokemon']->getVitesse() ?></h3>
        </div>
        <div class="bar clr-stats-dark">
          <div class="bar clr-stats-light" style="height:24px;width: <?= 100 * $viewVars['pokemon']->getVitesse() / 255 ?>%;"></div>
        </div>
      </div>

    </div>
  </div>
  <div class="margin-block-start text-align:center">
    <a class="color:white" href="./">Retour Pokedex</a>
  </div>
</div>