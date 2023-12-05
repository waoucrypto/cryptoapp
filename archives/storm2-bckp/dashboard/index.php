<?php include '../_layout1.php' ;?>

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

<?php $menu=''; include '_dash_menu.php' ;?>

<div class="dash_bloc_center"></div>
<div class="dash_bloc_right"></div>
<div class="dash_bloc_left"></div>

<div class="dash_left_top"><?php include '_dash_latest.php' ;?></div>
<div class="dash_left_bottom"><?php include '_dash_trending.php' ;?></div>
<div class="dash_center_top"><?php include '_dash_chart.php' ;?></div>
<div class="dash_center_bottom1"><?php include '_dash_overview.php' ;?></div>
<div class="dash_center_bottom2"><?php include '_dash_buy.php' ;?></div>
<div class="dash_center_bottom3"><?php include '_dash_profit.php' ;?></div>
<div class="dash_right_top"><?php include '_dash_portfolio.php' ;?></div>
<div class="dash_right_bottom"><?php include '_dash_performance.php' ;?></div>

<?php include '_search0.php' ;?>
<?php include '_dash_share.php' ;?>
<?php include '_dash_settings.php' ;?>

</div><!-- END DASH -->

<?php include '../_layout2.php' ;?>