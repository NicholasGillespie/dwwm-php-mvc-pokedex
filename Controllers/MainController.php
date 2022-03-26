<?php

class MainController
{
    public function show($viewName, $viewVars = [])
    {
        include __DIR__ . '/../views/layout/header.tpl.php';
        include __DIR__ . '/../views/' . $viewName . '.tpl.php';
        include __DIR__ . '/../views/layout/footer.tpl.php';
    }
}