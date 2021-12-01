<?php

class Db{
    protected function connection(){

            $username = "root";
            $password = "";
            $db = new PDO('mysql:host=localhost;dbname=applicationconcepteur;charset=utf8', $username, $password);

            return $db;

    }
}