<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>The Knitting Forum</title>
</head>

<body>
    <header>
        <nav>
            <ul class="menu1">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?controller=forum">Forum</a></li>
                <li><a href="index.php?controller=article&function=index">Ajouter article</a></li>
                <li><a href="index.php?controller=utilisateur&function=create">Faire une compte</a></li>
            </ul>

            <ul class="menu2">
                <li><a href="index.php?controller=utilisateur&function=index">Login</a>
                <li>/</li>
                </li>
                <li><a href="">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <div class="container">
            <?php echo $content; ?>
        </div>

    </main>

</body>

</html>