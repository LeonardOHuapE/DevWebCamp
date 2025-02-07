<?php 

namespace Controllers;

use Model\Dias;
use Model\Categorias;
use Model\Evento;
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
        $evento = new Evento;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $evento->sincronizar($_POST);
            $alertas = $evento->validar();

            if (empty($alertas)) {
                $resultado = $evento->guardar();
                if($resultado) {
                    header('Location: /admin/evento');
                }
            }
        }

        
        $router->render('admin/eventos/crear', [
            'titulo' => 'Crear Evento',
            'alertas' => $alertas,
            'categorias' => $categorias,
            'dias' => $dias,
            'horas' => $horas,
            'evento' => $evento
        ]);
    }
}

?>