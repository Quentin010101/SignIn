<?php
require('../modele/classDb.php');


class UsersContr extends Db{
    private $name;
    private $email;
    private $psw;
    public $result;

    public function __construct($name, $email, $psw)
    {
        $this->name = $name;
        $this->email = $email;
        $this->psw = password_hash($psw, PASSWORD_DEFAULT);
    }

    public function checkEmpty(){
        
        if(!empty($this->name) && !empty($this->email) && !empty($this->psw)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    public function setUserContr(){

        $this->setUser($this->name, $this->email, $this->psw);

    }


}
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['psw']))
{
    $newUser = new UsersContr($_POST['name'], $_POST['email'], $_POST['psw']);

    if($newUser->checkEmpty() == 1){
        $newUser->setUserContr();
        header('location: ../view/index.php');

    }else{

        header('location: ../view/index.php?erreur=ChampVide');
        
    }
}





