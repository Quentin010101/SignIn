

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/acceuil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&family=Poppins:wght@100;200;300;400;500;600;700&family=Zen+Kurenaido&display=swap" rel="stylesheet">
</head>
<body>

<div class="backgroundHeader">
        <h1>Application Concepter</h1>
        <h3>Lorem, ipsum dolor.</h3>
</div>
<header>
    <div class="logo">

    </div>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">ToDo List</a></li>
            <li><a href="">Gallery</a></li>
        </ul>
    </nav>
    <div class="login">
        <a class="loginConnexion" href="../controlleur/contrSign.php?action=signIn">Log In</a>
    </div>
</header>

<script src="../public/js/background.js"></script>

<?php
require('./view/acceuil.php');
require('./view/footer.php');