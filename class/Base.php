<?php
class Base{
    public static function bd(){
        define('HOST', 'localhost');
        define('USER', 'root');
        define('BD','menew');
        define('PASS','');
        try {
            $pdo=new PDO('mysql:host='.HOST.';dbname='.BD,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (Exception $th) {
            print('Houve erro na conexão...');
        }
        return $pdo;
    }
}
