<?php
namespace App\Helpers;

class View
{
    public function renderView($ruta)
    {
        require_once 'app/views/'.$ruta.'.php';
    }
}