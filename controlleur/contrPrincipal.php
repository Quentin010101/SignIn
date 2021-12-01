<?php 


function start(){
    require('./view/acceuil.php');
}

function toDo(){
    if(isset($_SESSION['name'])){
        require('./modele/modelePost.php');
        $newComment = new Post();
        $post = $newComment->getPost();
    }
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

function deletePost(){
    if(isset($_GET['delete'])){
        $postToDelete = $_GET['delete'];
        require('./modele/modelePost.php');
        $newComment = new Post();
        $newComment->deletePost($postToDelete);
        header('location: ../index.php?action=toDo');
    }
}