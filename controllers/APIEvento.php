<?php 

namespace Controllers;

class APIEvento {
    public static function index() {
        $categoria_id = $_GET['categoria'] ?? '';
        $dia_id = $_GET['dia'] ?? '';

        //Validacion de datos
        $categoria_id = filter_var($categoria_id, FILTER_VALIDATE_INT);
        $dia_id = filter_var($dia_id, FILTER_VALIDATE_INT);

        if(!$categoria_id || !$dia_id) {
            echo json_encode([]);
        }

        //Consultar a la base de datos con el modelo

    }
}
?>