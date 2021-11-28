<?php
session_start();


require('../modele/classDb.php');


class UsersInContr extends Db{
    private $name;
    private $psw;
    public $result;

    public function __construct($name, $psw)
    {
        $this->name = $name;
        $this->psw = $psw;
    }

    public function checkEmpty(){
        
        if(!empty($this->name) || !empty($this->psw)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    public function getUserContr(){
        return $this->getUser($this->name);

    }

    public function verifyPsw($psw){
        if(password_verify($this->psw, $psw)){
            $result = true;
        } else{
            $result = false;
        }
        return $result;
    }


}
if(isset($_POST['nameC']) && isset($_POST['pswC']))
{
    $newUser = new UsersInContr($_POST['nameC'], $_POST['pswC']);
    if($newUser->checkEmpty() == 1){

        $request = $newUser->getUserContr();

        if(isset($request['mdp'])){

            if($newUser->verifyPsw($request['mdp']) ==1){
                echo $request['mdp'];
                $_SESSION['name'] = $request['pseudo'];
                echo $_SESSION['name'];
                echo $request['pseudo'];
             header('location: ../view/index.php');
            }
            else{

            header('location: ../view/index.php?erreur=MotdepassEronne');
            }
        }
        else{

             header('location: ../view/index.php?erreur=Motdepassinnexistant');

        }
    }else{

        header('location: ../view/index.php?erreur=ChampVide');
        
    }
}
else{
    header('location: ../view/index.php?erreur=Champinnexistant');

}


