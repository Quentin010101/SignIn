<?php $title= 'erreur'; ?>

<?php ob_start(); ?>

<p>The following error has been found :</p>
<p><?php echo $erreur; ?></p>
<a href="../index.php">Return to main page</a>

<?php $content = ob_get_clean() ?>

<?php require('templateSign.php'); ?>
