<?php

require('modeleDatabase.php');

class Post extends Db{
    public function setPost($comment){

        $query = 'INSERT INTO post(userid, usercomment) VALUES(?,?)';
        $stmt = $this->connection()->prepare($query);
        $stmt->execute([$_SESSION['id'], $comment]);
    }

    public function getPost(){
        $query = 'SELECT usercomment FROM post WHERE userid = ?';
        $stmt = $this->connection()->prepare($query);
        $stmt->execute([$_SESSION['id']]);


        return $stmt;
    }
}