<?php session_start() ?>


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
    
        <?php include_once('header.php') ?>
        <div class="containerTodo">
            <form id="formToDo" action="toDoControlleur.php" method="post">
                <h3>ToDo Liste</h3>
                <label for="toDo">Chose à faire</label>
                <input type="text" name="toDo" id="toDo" placeholder="first Item">
                <input type="submit" value="Valider">
            </form>
        </div>
</body>
</html>