<?php 


function start(){
    require('./view/acceuil.php');
}

function toDo(){
    require('./modele/modelePost.php');
    $newComment = new Post();
    $post = $newComment->getPost();
    require('./view/toDo.php');
}

function newPost(){
    if(isset($_POST['post'])){
        $comment = $_POST['post'];
        require('./modele/modelePost.php');
        $newComment = new Post();
        $newComment->setPost($comment);
        header('location: ../index.php?action=toDo');
    }

}