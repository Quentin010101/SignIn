<?php
//---------------Sign in
require_once('../modele/modeleUser.php');

function signIn()
{
    if (isset($_POST['email1']) && isset($_POST['password1'])) {

        if (!empty($_POST['email1']) && !empty($_POST['password1'])) {

            $email = $_POST['email1'];
            $password = $_POST['password1'];

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $newUser = new User();
                $request = $newUser->getUser($email);

                if (password_verify($password, $request['password'])) {
                    require_once('../view/acceuil.php');
                }
            }
        }
    }
}

function signUp()
{
    if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])){
        $name = isset($_POST['name']);
        $surname = isset($_POST['surname']);
        $email = isset($_POST['email']);
        $password = isset($_POST['password']);

        $newUser = new User();
        $newUser->setUser($name, $surname, $email, $password);

    }
}
