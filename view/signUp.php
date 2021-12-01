<?php $title = 'SignUp'; ?>

<?php ob_start(); ?>
    <main>
        <div class="container-form">
            <div class="titre">
                <a href="../index.php">Application Concepteur</a>
            </div>
            <form action="../index.php" method="post" id="form">
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

<?php $content = ob_get_clean(); ?>

<?php require('./templateSign.php'); ?>