
<?php
session_start();
$host = 'localhost';
$db = 'admin_login';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = md5($_POST['password']); // Pour une sécurité améliorée, utilisez password_hash()

        $stmt = $pdo->prepare('SELECT * FROM admins WHERE username = ? AND password = ?');
        $stmt->execute([$username, $password]);

        if ($stmt->rowCount() > 0) {
            $_SESSION['admin'] = $username;
            header('Location: admin_dashboard.php'); // Redirection vers la page d'administration
            exit();
        } else {
            echo '<p>Nom d\'utilisateur ou mot de passe incorrect.</p>';
        }
    }
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
