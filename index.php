<?php
use App\Helpers\App;

spl_autoload_register(function($clase){
    require_once  $clase.'.php';
});

$app = new App;