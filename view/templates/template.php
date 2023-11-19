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
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?controller=forum">Forum</a></li>
                <li><a href="index.php?controller=article&function=create">Ajouter article</a></li>
                <li><a href="index.php?controller=utilisateur&function=create">Faire une compte</a></li>
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