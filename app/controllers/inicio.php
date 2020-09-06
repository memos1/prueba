<?php
namespace App\Controllers;

use App\Helpers\Controller;

class Inicio extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function render()
    {
        $this->view->renderView('inicio/index');
    }
}