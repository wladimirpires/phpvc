<?php

class Conn {


    private static $instance;

    public static function getConn(){

        if (!isset(self::$instance))
            self::$instance = new PDO('mysql:host=localhost;dbname=estudo003_db;charset=utf8', 'root', '');
        
        return self::$instance;

    }
}

?>