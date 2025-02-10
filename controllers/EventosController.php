<?php 

namespace Controllers;

use Classes\Paginacion;
use Model\Dias;
use Model\Categorias;
use Model\Evento;
use Model\Hora;
use Model\Ponente;
use MVC\Router;

class EventosController {

    public static function index (Router $router) {
        //Paginacion 1.-Pagina Actual, 2.- Registros por Pagina, 3.- Total de registros

        //Obtener la pagina actual si no hay no dirige a la primera 
        $pagina_actual = $_GET['page'];
        $pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);

        if(!$pagina_actual || $pagina_actual < 0) {
            header('Location: /admin/eventos?page=1');
        }
        //Definir los registros que se mostraran por pagina
        $por_pagina = 10;
        //Con el metodo total de active record sacamos el total de registros del modelo
        $total = Evento::total();
        //Instanciamos la paginacion, con esto ya se crea la paginacion pero aun no esta la funcio que muestra la cantidad total de registros definidos 
        $paginacion = new Paginacion($pagina_actual, $por_pagina, $total);
        //mostramos los eventos de acuerdo a la paginacion  con otro metodo de active record
        $eventos = Evento::paginar($por_pagina, $paginacion->offset());
        //Con la paginacion ya instanciada hacemos una validacion para que no se muestre mas paginas de las ya definidas en la funcion;
        if ($paginacion->totalPaginas() < $pagina_actual) {
            header('Location: /admin/eventos?page=1');
        }

        //Creacion de llaves para conseguisr los nombres de por id
        foreach ($eventos as $evento ){
            $evento->categoria = Categorias::find($evento->categoria_id);
            $evento->dia = Dias::find($evento->dia_id);
            $evento->hora = Hora::find($evento->hora_id);
            $evento->ponente = Ponente::find($evento->ponente_id);
        }

        $router->render('admin/eventos/index', [
            'titulo' => 'Eventos / Workshops',
            'eventos' => $eventos,
            'paginacion' => $paginacion->paginacion()
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
                    header('Location: /admin/eventos');
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

    public static function editar(Router $router) {
        $evento_id = $_GET['id'];
        $evento_id = filter_var($evento_id, FILTER_VALIDATE_INT);
        
        if (!$evento_id) {
            header ('Location: /admin/eventos');
        } 

        $evento = Evento::find($evento_id);
        if (!$evento) {
            header ('Location: /admin/eventos');
        } 

        $alertas = [];
        $categorias = Categorias::all('ASC');
        $dias = Dias::all('ASC');
        $horas = Hora::all('ASC');

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            debuguear('Actizalizando');
        }







        $router->render('admin/eventos/editar', [
            'titulo' => 'Editar Evento',
            'alertas' => $alertas,
            'categorias' => $categorias,
            'dias' => $dias,
            'horas' => $horas,
            'evento' => $evento
        ]);


    }
}

?>