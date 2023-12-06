<?php include '_layout1.php' ;?>


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

<!--
DASH
-->
<div class="dash <?php echo $themeClass; ?>">

<div class="bot">
<div class="bot_left"><?php include '_bot_side.php' ;?></div>
<?php include '_bot_search.php' ;?>

</div>

<?php include '_search.php' ;?>

</div><!-- END DASH -->


<?php include '_layout2.php' ;?>