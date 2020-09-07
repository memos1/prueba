<?php

namespace App\Helpers;

use App\Controllers\Inicio;

class App
{
    function __construct()
    {
        $url = $_GET['url'] ?? null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (empty($url[0])) {
            $archivoController = 'app/controllers/inicio.php';
            require $archivoController;
            $controller = new Inicio();
            $controller->render();
            return false;
        } else {
            $archivoController = 'app/controllers/' . $url[0] . '.php';
        }
        
        if (file_exists($archivoController)) {
            
            require $archivoController;
            $controller = new $url[0];
            $controller->render();
        } else {
            //controllar errores
            echo 'Error al cargar el recurso';
        }
    }
}
