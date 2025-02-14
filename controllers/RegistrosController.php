<?php 

namespace Controllers;
use MVC\Router;

class RegistrosController {
    public static function index(Router $router) {
        $router->render('admin/registros/index', [
            'titulo' => 'Usuarios Registrados'
        ]);
    }
}

?>