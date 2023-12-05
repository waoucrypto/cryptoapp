
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    setcookie('theme', $_POST['theme'], time() + (86400 * 30), "/"); // 86400 = 1 jour
    $_SESSION['theme'] = $_POST['theme'];
    echo "Thème mis à jour";
}
?>
