<?php 

namespace Controllers;
use MVC\Router;

class RegistrosController {
    public static function index(Router $router) {
        autenticar();
        $router->render('admin/registros/index', [
            'titulo' => 'Usuarios Registrados'
        ]);
    }
}

?>