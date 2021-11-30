<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/sign.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&family=Poppins:wght@100;200;300;400;500;600;700&family=Zen+Kurenaido&display=swap" rel="stylesheet">
</head>
<body>
<main>
        <div class="container-form">
            <div class="titre">
                <a href="../index.php">Application Concepteur</a>
            </div>
            <form action="" method="post" id="form1">
                <h2>Sign In</h2>
                <div>
                    <label for="email1">Entrer your email</label>
                    <input type="email" id="email1" name="email1" placeholder="email">
                    <p></p>
                </div>
                <div>
                    <label for="password1">Entrer your password</label>
                    <input type="password" id="password1" name="password1" placeholder="password">
                    <p></p>
                </div>
                <input type="submit" value="Valider">
                <a href="../controlleur/contrSign.php?action=signUp">If you do not have an account, click here.</a>
            </form>
        </div>
        <div class="container-vue">
        </div>
    </main>
    <script src="../public/js/signIn.js"></script>
</body>
</html>