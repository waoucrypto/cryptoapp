<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['langue'])) {
    $_SESSION['langue'] = $_POST['langue'];
}

// Vous pouvez maintenant utiliser $_SESSION['langue'] pour récupérer la langue choisie
?>