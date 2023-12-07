<!DOCTYPE html>

<html lang="en">

<head>
		<!-- Title -->
		<title>Storm</title>

		<!-- Meta -->
		<meta charset="utf-8">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CACHE -->
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Expires" content="0">

		<!-- Google fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@500;600;700;800;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	
		<!-- ICONS -->
        <link rel="stylesheet" href="/css/font-awesome/6.4.2/css/all.min.css">
        
		<!-- CSS -->
        <link rel="stylesheet" href="/css/reset.css">
		<link rel="stylesheet" href="/css/color.css">
        <link rel="stylesheet" href="/css/dash.css">

	    <!-- JS -->
		<script src="/js/jquery.min.js"></script>
</head>

<body class="<?php echo $themeClass; ?>" >

<?php
session_start();
if (isset($_COOKIE['theme'])) {
    $_SESSION['theme'] = $_COOKIE['theme'];
}
if (!isset($_SESSION['theme'])) {
    $_SESSION['theme'] = 'dark';
}
$themeClass = $_SESSION['theme'];
?>
