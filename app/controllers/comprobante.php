<?php
namespace App\Controllers;

use App\Helpers\Controller;

class Comprobante extends Controller {
    
    function __construct()
    {
        parent::__construct();
    }
    public function render()
    {
        $this->view->renderView('comprobante/index');
    }
}