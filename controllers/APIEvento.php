<?php 

namespace Controllers;

use Model\EventoHorario;

class APIEvento {
    public static function index() {
        autenticar();
        $dia_id = $_GET['dia'] ?? '';
        $categoria_id = $_GET['categoria'] ?? '';

        //Validacion de datos
        $categoria_id = filter_var($categoria_id, FILTER_VALIDATE_INT);
        $dia_id = filter_var($dia_id, FILTER_VALIDATE_INT);

        if(!$categoria_id || !$dia_id) {
            echo json_encode([]);
        }

        //Consultar a la base de datos con el modelo
        $eventos = EventoHorario::whereArray(['categoria_id' => $categoria_id, 'dia_id'=>$dia_id,]) ?? [];
        header('Content-Type: application/json');
        echo json_encode($eventos); 
    }
}
?>