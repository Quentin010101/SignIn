<?php
//---------------Sign in
require('./modele/modeleUser.php');

function signIn()
{
    if (isset($_POST['email1']) && isset($_POST['password1'])) {

        if (!empty($_POST['email1']) && !empty($_POST['password1'])) {
            $email = $_POST['email1'];
            $password = $_POST['password1'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
                $newUser = new User();
                $request = $newUser->getUser($email);
                if(!$request){
                    $erreur = "user not found";
                    require('./view/erreur.php');
                }
                elseif (password_verify($password, $request['password'])) {
                    $_SESSION['name'] = $request['name'];
                    $_SESSION['id'] = $request['id'];
                    require('./view/acceuil.php');
                }
            }
        }
    }
}

function signUp()
{
    if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $newUser = new User();
        $newUser->setUser($name, $surname, $email, $password);
        require('./view/acceuil.php');
    }
}

