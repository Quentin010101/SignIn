<?php $title = 'ToDo'; ?>

<?php ob_start() ?>
<main id="maintodo">
    <div class="container-toDo">
        <h3>Your ToDo List <?php if (isset($_SESSION['name'])) {
                                echo $_SESSION['name'];
                            } ?></h3>
        <?php
        if (isset($_SESSION['name'])) {
            foreach ($post as $posts) :
        ?>
        <div class='newPost'>
            <p><?php echo $posts['usercomment'] ?></p>
            <a href="../index.php?delete=<?php echo $posts['postid'];?>">delete</a>
        </div>
            <?php
            endforeach;
            ?>
            <form action="./index.php" method="post">
                <label for="toDo">New task</label>
                <input type="text" id="toDo" name="post" placeholder="Enter a new task">
                <input type="submit" value="Save">
            </form>

        <?php
        } else {
        ?>
            <p class="erreur">You need to register to post a task</p>
        <?php
        }
        ?>

    </div>
</main>

<?php $content = ob_get_clean(); ?>

<?php require('templatePrincipale.php'); ?>