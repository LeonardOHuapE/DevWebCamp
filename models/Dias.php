<?php 

namespace Model;

use Model\ActiveRecord;

class Dias extends ActiveRecord {
    protected static $tabla = 'dias';
    protected static $columnasDB = ['id', 'nombre'];

    public $id;
    public $nombre;
}
?>