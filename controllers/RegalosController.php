<?php 

namespace Controllers;
use MVC\Router;

class RegalosController {
    public static function index(Router $router) {
        autenticar();
        $router->render('admin/regalos/index', [
            'titulo' => 'Regalos'
        ]);
    }
}

?>