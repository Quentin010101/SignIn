<?php 

require_once('../modele/modeleDatabase.php');

class User extends Db{
    public function setUser($name, $surname, $email, $password){
        $query = 'INSERT INTO user(name, surname, email, password) VALUES(?,?,?,?)';
        $stmt = $this->connection()->prepare($query);
        $userSet = $stmt->execute([$name, $surname, $email, $password]);

        return $userSet;
    }

    public function getUser($email){
        $query = 'SELECT COUNT(*) FROM user WHERE email = ?';
        $stmt = $this->connection()->prepare($query);
        $stmt->execute([$email]);

        if($stmt >= 1){
            $request = $stmt->fetchAll();
            return $request;
        }
        else{
            return false;
        }
    }
}

