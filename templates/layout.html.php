<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
    <header>
        <h1>Mon Application</h1>
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="personnage.php">Personnage</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php include $contentTemplate; ?>
    </main>
    <footer>
        <p>Copyright © <?php echo date("Y"); ?></p>
    </footer>
</body>
</html>
