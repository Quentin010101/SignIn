<?php ob_start();

if (!isset($_SESSION['name'])) :
?>
    <div class="login">
        <a class="loginConnexion" href="./view/signIn.php">Log In</a>
    </div>
<?php
else :
?>
    <div class="login">
        <div>
            <?php echo 'Bonjour ' . $_SESSION['name']; ?>
        </div>
        <div>
            <a href="../index.php?action=disco">
                <ion-icon name="power-outline"></ion-icon>
            </a>
        </div>
    </div>
<?php
endif;

$variable = ob_get_clean(); ?>

<?php ob_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/acceuil.css">
    <link rel="stylesheet" href="../public/css/toDo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&family=Poppins:wght@100;200;300;400;500;600;700&family=Zen+Kurenaido&display=swap" rel="stylesheet">
</head>

<body>

    <div class="backgroundHeader">
        <h1>Application Concepter</h1>
        <h3>Lorem, ipsum dolor</h3>
    </div>
    <header>
        <div class="logo">

        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../index.php?action=toDo">ToDo List</a></li>
                <li><a href="#">Gallery</a></li>
            </ul>
        </nav>   
        <?php echo $variable; ?>
    </header>
    <script src="../public/js/background.js"></script>

    <?php echo $content; ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>