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
            //Se obtiene el número de param
            $nparam = sizeof($url);

            // si se llama a un método

            if ($nparam > 1) {
                //hay parámetros
                if ($nparam > 2) {
                    $param = [];
                    for ($i = 2; $i < $nparam; $i++) {
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                } else {
                    // solo se llama al método
                    $controller->{$url[1]}();
                }
            } else {
                // si se llama a un controlador
                $controller->render();
            }
        } else {
            //controllar errores
            echo 'Error al cargar el recurso';
        }
    }
}
