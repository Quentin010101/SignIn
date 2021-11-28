<?php 

class Db {
    protected function connection(){
        try
        {
            $username = "root";
            $password = "";
            $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', $username, $password);

            return $db;
        }
        catch(Exception $e)
        {
            print ('Erreur: ' . $e->getMessage());
            die();
        }
    }

    protected function setCommnent($name, $email, $psw){
        
        $query = 'INSERT INTO user(pseudo, email, mdp) VALUES(?,?,?)';
        $stmt = $this->connection()->prepare($query);
        $stmt->execute([$name,$email,$psw]);

    }

    protected function getComment($name){

        $query = 'SELECT * FROM user WHERE pseudo = ?';
        $stmt = $this->connection()->prepare($query);
        $stmt->execute([$name]);
        $request = $stmt->fetch();

        return $request;
    }
    
}