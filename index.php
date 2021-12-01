<?php
session_start();


try {
    
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'disco') {
            session_destroy();
            header('location: ./index.php');
        }
        elseif($_GET['action'] == 'toDo'){
            require('./controlleur/contrPrincipal.php');
            toDo();
        }
        else{
            exit;
        }
    } elseif (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])) {
        require('./controlleur/contrSign.php');
        signUp();
    } elseif (isset($_POST['email1']) && isset($_POST['password1'])) {
        require('./controlleur/contrSign.php');
        signIn();
    } elseif(isset($_POST['post'])){
        require('./controlleur/contrPrincipal.php');
        newPost();
    } 
    else{
        require('./controlleur/contrPrincipal.php');
        start();
    }

}
catch(Exception $e)
{
    echo 'Erreur : ' . $e->getMessage();
}
