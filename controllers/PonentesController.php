<?php 

namespace Controllers;

use Model\Ponente;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;

class PonentesController {
    public static function index(Router $router) {
        $ponentes = Ponente::all();
        $router->render('admin/ponentes/index', [
            'titulo' => 'Ponentes / Conferencistas',
            'ponentes' => $ponentes
        ]);
    }

    public static function crear(Router $router) {
        $alertas = [];
        $ponente = new Ponente;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            //Leer Imagen
            if(!empty($_FILES['imagen']['tmp_name'])) {
                //creamos una variable donde ponemos la ubicacion de la carpeta de imagenes
                $carpeta_imagenes = '../public/img/speakers';

                //Validamos que ya exista la carpeta si no la creamos 
                if(!is_dir($carpeta_imagenes)) {
                    //Colocamos la ubiacion, nivel de permisos y recursividad 
                    mkdir($carpeta_imagenes, 0755, true);
                }

                //Creamos el tipo de formato por cada imagen 
                //Utilizamos el metodo Image, donde colocamos la imagen que subio el usuario
                //fit es el tamaño de pixeles que tendra la imagen 
                //encode el formato de la imagen y la calidad que tendra 
                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png', 80);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp', 80);

                //creamos un nombre aleatoria para evitra duplicados en la base de datos 
                $nombre_imagen = md5(uniqid(rand(), true));

                //asignamos este nombre al modelo para pasar la validacion
                $_POST['imagen'] = $nombre_imagen;
            } 

            //Modificamos los valores de la columna redes ya que son un arreglo
            
            $_POST['redes'] = json_encode($_POST['redes'], JSON_UNESCAPED_SLASHES); 
            $ponente->sincronizar($_POST);

            $alertas = $ponente->validar();

            //Guardar los datos 
            if(empty($alertas)) {
                //Guardamos las imagenes que estan en memoria en la carpeta
                $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . ".png");
                $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . ".webp");

                //Guardamos los datos en la base de datos 

                $resultado = $ponente->guardar();

                if($resultado) {
                    header('Location: /admin/ponentes');
                }
            }
        }

        $router->render('admin/ponentes/crear', [
            'titulo' => 'Crear Ponente',
            'alertas' => $alertas,
            'ponente' => $ponente   
        ]);
    }
}
?>