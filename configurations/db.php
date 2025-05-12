<?php

class DB{

    public static $instance = null;
    public static function crearInstancia(){
        if ( !isset (self ::$instance)) {

            $opciociones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self ::$instance = new PDO('mysql:host=localhost;dbname=aplicacion', 'root', '', $opciociones);
            // echo "Conectado a la base de datos";
            }
            return self ::$instance;
    }
    
}
?>
