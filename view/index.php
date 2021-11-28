<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <?php include_once('../view/header.php'); ?>
    <div class="container">
        <form action="../controleur/signUpControlleur.php" method="post">
            <h3>S'enregistrer</h3>
            <label for="name">Entrer votre nom</label>
            <input type="text" id="name" placeholder="Entrer votre nom" name="name">

            <label for="email">Entrer votre email</label>
            <input type="email" id="email" name="email" placeholder="Entrer votre email">
            <label for="psw">Entrer votre mot de passe</label>
            <input type="password" id="psw" name="psw">
            <input type="submit" value="Valider">
            <p><?php  if(isset($_GET['erreur']))
            { if(!empty($_GET['erreur'])) { echo $_GET['erreur'];} } ?></p>
        </form>
        <form action="../controleur/signInControlleur.php" method="post">
            <h3>Se connecter</h3>
            <label for="nameC">Entrer votre nom</label>
            <input type="text" id="nameC" name="nameC" placeholder="Entrer votre name">
            <label for="pswC">Entrer votre mot de passe</label>
            <input type="password" id="pswC" name="pswC">
            <input type="submit" value="Valider">
            <p><?php  if(isset($_GET['erreur']))
            { if(!empty($_GET['erreur'])) { echo $_GET['erreur'];} } ?></p>
        </form>
    </div>    

</body>
</html>