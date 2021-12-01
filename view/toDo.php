<?php $title = 'ToDo'; ?>

<?php ob_start() ?>
<main>
    <div class="container-toDo">
        <h3>Your ToDo List <?php echo $_SESSION['name']; ?></h3>
        <?php 
        foreach($post as $posts):
      
            ?>
<p><?php echo $posts['usercomment'] ?></p>
            <?php
        endforeach;
        ?>
        <form action="./index.php" method="post">
            <label for="toDo">New post</label>
            <input type="text" id="toDo" name="post">
            <input type="submit" value="Save">
        </form>
    </div>
</main>

<?php $content = ob_get_clean(); ?>

<?php require('templatePrincipale.php'); ?>