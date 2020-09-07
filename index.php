<?php
use App\Helpers\App;
<<<<<<< HEAD

=======
>>>>>>> fee4ba6a0d7c7aa7894586276e9fbfc6b950d1c5
define("_VIEW_PATH_",'app/views/');
spl_autoload_register(function($clase){
    require_once  $clase.'.php';
});

$app = new App;
