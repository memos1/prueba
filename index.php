<?php
use App\Helpers\App;

define("_VIEW_PATH_",'app/views/');
spl_autoload_register(function($clase){
    require_once  $clase.'.php';
});

$app = new App;