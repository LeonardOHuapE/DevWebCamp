<?php 

namespace Controllers;

use MVC\Router;

class PaginasController {
    public static function index(Router $router) {

        $router->render('paginas/index', [
            'titulo' => 'Titulo'
        ]);
    }

    public static function eventos(Router $router) {

        $router->render('paginas/eventos', [
            'titulo' => 'Eventos'
        ]);
    }

    public static function paquetes(Router $router) {

        $router->render('paginas/paquetes', [
            'titulo' => 'Paquetes'
        ]);
    }

    public static function conferencias(Router $router) {

        $router->render('paginas/conferencias', [
            'titulo' => 'WorkShops y conferencias'
        ]);
    }



}


?>