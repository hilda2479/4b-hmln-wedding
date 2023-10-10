<?php 

class Conexion{

    static public function conectar(){
        $link = new PDO("mysql:host=127.0.0.1:3306;dbname=4b-hmln-wedding", "soporte3b", "122333");

        $link->exec("set names utf8");

        return $link;
    }

}
