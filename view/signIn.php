<?php $title = 'SignIn'; ?>


<?php ob_start(); ?>
<main>
    <div class="container-form">
        <div class="titre">
            <a href="../index.php">Application Concepteur</a>
        </div>
        <form action="../index.php" method="post" id="form1">
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
            <a href="../view/signUp.php">If you do not have an account, click here.</a>
        </form>
    </div>
    <div class="container-vue">
    </div>
</main>
<script src="../public/js/signIn.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('./templateSign.php'); ?>
