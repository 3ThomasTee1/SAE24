<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Administration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="admin-container">
        <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['admin']); ?>!</h1>
        <p>Ceci est la page d'administration du site.</p>
        <a href="logout.php">Se déconnecter</a>
    </div>
</body>
</html>
