<?php 

namespace Controllers;

use MVC\Router;

class DashboardController {
    public static function index(Router $router) {

        autenticar();
        $router->render('admin/dashboard/index', [
            'titulo' => 'Panel de Administración'
        ]);
    }
}

?>