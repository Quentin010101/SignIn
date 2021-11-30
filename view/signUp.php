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
            <form action="" method="post" id="form">
                <h2>Sign Up</h2>
                <div>
                    <label for="name">Enter your Name</label>
                    <input type="text" id="name" name="name" placeholder="name">
                    <p></p>
                </div>
                <div>
                    <label for="surname">Enter your Surname</label>
                    <input type="text" id="surname" name="surname" placeholder="surname">
                    <p></p>
                </div>
                <div>
                    <label for="email">Entrer your email</label>
                    <input type="email" id="email" name="email" placeholder="email">
                    <p></p>
                </div>
                <div>
                    <label for="emailConfirm">Confirm your email</label>
                    <input type="email" id="emailConfirm" name="emailConfirm" placeholder="email">
                    <p></p>
                </div>
                <div>
                    <label for="password">Entrer your password</label>
                    <input type="password" id="password" name="password" placeholder="password">
                    <p></p>
                </div>
                <div>
                    <label for="passwordConfirm">Confirm your password</label>
                    <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="password">
                    <p></p>
                </div>
                    <input type="submit" value="Valider">
            </form>
        </div>
        <div class="container-vue">
        </div>
    </main>

    <script src='../public/js/signUp.js'></script>
</body>

</html>