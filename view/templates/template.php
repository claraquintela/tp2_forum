<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Forum</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?controller=client">Client</a></li>
                <li><a href="index.php?controller=client&function=create">Ajouter article</a></li>
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