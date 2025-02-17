<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function paginaActual ($path = '') : bool {
    return str_contains($_SERVER['PATH_INFO'], $path) ? true : false;
}

function isAuth():bool {
    return isset($_SESSION['nombre']) && !empty($_SESSION);
}

function isAdmin() {
    session_start();
    if (!isset($_SESSION['admin']) && empty($_SESSION['admin'])) {
        header('Location: /');
    }
}