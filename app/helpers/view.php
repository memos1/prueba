<?php
namespace App\Helpers;

class View
{
    public function renderView($ruta)
    {
        require_once _VIEW_PATH_.$ruta.'.php';
    }
}