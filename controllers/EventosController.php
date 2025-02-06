<?php 

namespace Controllers;

use Model\Dias;
use Model\Categorias;
use Model\Hora;
use MVC\Router;

class EventosController {
    public static function index (Router $router) {
        $router->render('admin/eventos/index', [
            'titulo' => 'Eventos / Workshops'
        ]);
    }

    public static function crear(Router $router) {
        $alertas = [];
        $categorias = Categorias::all('ASC');
        $dias = Dias::all('ASC');
        $horas = Hora::all('ASC');
        $router->render('admin/eventos/crear', [
            'titulo' => 'Crear Evento',
            'alertas' => $alertas,
            'categorias' => $categorias,
            'dias' => $dias,
            'horas' => $horas 
        ]);
    }
}

?>