
<!--
SETTINGS
-->
<div class="settings">
<div class="settings_background" onClick="settings_close()"></div>

	<?php print_r($latrad); ?>
	
	
<?php include '_dash_wallet.php' ;?>

</div>

<script>
function settings_open(){
$('.settings').css('display', 'flex');
$('.settings_background').animate({opacity: '1'}, 200);
$('.settings .settings_bloc').animate({marginTop: '0'}, 100);

}
function settings_close(){
$('.settings').css('display', 'none');
$('.settings_background').animate({opacity: '0'}, 0);
$('.settings .settings_bloc').animate({marginTop: '150px'}, 0);

}

</script>
