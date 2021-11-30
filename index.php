<?php

require('./controlleur/contrSign.php')


if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])){
    signUp();
    require('./controlleur/contrPrincipal.php');
}
if(isset($_POST['email1']) && isset($_POST['password1'])){
    signIn();
    require('./controlleur/contrPrincipal.php');
}



if (isset($_GET['action'])) {
    if (!empty($_GET['action'])) {
        if ($_GET['action'] == 'signIn') {
            require('../view/signIn.php');
        } else if ($_GET['action'] == 'signUp') {
            require('../view/signUp.php');
        } else {
            header('location: ../index.php');
        }
    } else {
        header('location: ../index.php');
    }
} else {
    header('location: ../index.php');
}