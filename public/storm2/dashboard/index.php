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

<?php $menu=''; include '_menu.php' ;?>

<div class="dash_bloc_center"></div>
<div class="dash_bloc_right"></div>
<div class="dash_bloc_left"></div>

<div class="dash_left_top"><?php include 'dash-latest.php' ;?></div>
<div class="dash_left_bottom"><?php include 'dash-trending.php' ;?></div>
<div class="dash_center_top"><?php include 'dash-chart.php' ;?></div>
<div class="dash_center_bottom1"><?php include 'dash-overview.php' ;?></div>
<div class="dash_center_bottom2"><?php include 'dash-buy.php' ;?></div>
<div class="dash_center_bottom3"><?php include 'dash-profit.php' ;?></div>
<div class="dash_right_top"><?php include 'dash-portfolio.php' ;?></div>
<div class="dash_right_bottom"><?php include 'dash-performance.php' ;?></div>

<?php include 'dash-share.php' ;?>


<!--
SETTINGS
-->
<div class="settings">
<div class="settings_background" onClick="settings_close()"></div>	
<?php include 'dash-settings.php' ;?>
</div>

</div><!-- END DASH -->

<?php include '_layout2.php' ;?>