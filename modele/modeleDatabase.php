<?php

class Db{
    protected function connection(){
        try
        {
            $username = "root";
            $password = "";
            $db = new PDO('mysql:host=localhost;dbname=applicationconcepteur;charset=utf8', $username, $password);

            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur :' . $e->getMessage());
        }
    }
}