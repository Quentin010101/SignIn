<?php 

require_once('modeleDatabase.php');

class User extends Db{
    public function setUser($name, $surname, $email, $password){

        $query = 'INSERT INTO user(name, surname, email, password) VALUES(?,?,?,?)';
        $stmt = $this->connection()->prepare($query);
        $userSet = $stmt->execute([$name, $surname, $email, $password]);

        return $userSet;
    }

    public function getUser($email){
        $query = 'SELECT * FROM user WHERE email = ?';
        $stmt = $this->connection()->prepare($query);
        $stmt->execute([$email]);
        $count = $stmt->rowCount();

        if($count >= 1){
            $request = $stmt->fetch();
            return $request;
        }
        else{
            return false;
        }
    }
}

