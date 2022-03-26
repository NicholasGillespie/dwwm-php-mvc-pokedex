<?php

class TypeController extends MainController
{
    public function selectAllAction()
    {
        $DBCon = new DBData();

        $typeList = $DBCon->getAllTypes();

        return $this->show('type/list', [
            'typeList' => $typeList
        ]);
    }

    public function selectOneAction()
    {
        $DBCon = new DBData();

        $typePokemons = $DBCon->getOneType($_GET['type_id']);

        return $this->show('type/pokemon', [
            'typePokemons' => $typePokemons
        ]);
    }
}
