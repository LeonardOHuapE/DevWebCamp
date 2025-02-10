<?php 

namespace Controllers;

use Model\Ponente;

class APIPonente {
    public static function index () {
        $ponentes = Ponente::all();
        header('Content-Type: application/json');
        echo json_encode($ponentes);
    }
}

?>