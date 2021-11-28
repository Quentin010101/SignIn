
<header>
    <nav>
        <li><a href="../view/index.php">Acceuil</a></li>
        <li><a href="../view/toDo.php">ToDo Liste</a></li>
    </nav>
    <div class="pseudo">
        <?php if(isset($_SESSION['name'])){echo "Bonjour " . $_SESSION['name'];}?>
    </div>
</header>