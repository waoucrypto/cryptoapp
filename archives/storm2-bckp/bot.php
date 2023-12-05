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
BOT
-->
<div class="dash <?php echo $themeClass; ?>">

	
<div class="bot">

<div class="bot_mobile">
<a href="#" onclick="bot_mobile_side_open()"><span></span><span></span></a>
<a href="bot.php">Storm</a>
<a href="bot.php"><i class="fa-regular fa-pen-to-square"></i></a>
</div>

<div class="bot_left"><?php include '_bot_side.php' ;?></div>
<?php include '_bot_search.php' ;?>
</div>

	
</div><!-- END DASH -->

<script>
$(document).ready(function() {
    $(".bot_mobile a:nth-child(1)").click(function(event) {
        event.preventDefault(); 
        $('.bot_left').show().animate({"left":"0"}, 200);
		$('.bot_bottom').animate({"left":"75%", "right":"-75%"}, 200);
		$('.bot_empty').animate({"left":"75%", "right":"-75%"}, 200);
		$('.bot_center').animate({"left":"75%", "right":"-75%"}, 200);
		$('.bot_mobile').animate({"left":"75%", "right":"-75%"}, 200);
        event.stopPropagation(); 
    });

    $(document).click(function() {
        $('.bot_left').animate({"left":"-75%"}, 200).delay().slideDown().fadeOut();
		$('.bot_bottom').animate({"left":"0", "right":"0"}, 200);
		$('.bot_empty').animate({"left":"0", "right":"0"}, 200);
		$('.bot_center').animate({"left":"0", "right":"0"}, 200);
		$('.bot_mobile').animate({"left":"0", "right":"0"}, 200);
    });

    $('.bot_left').click(function(event) {		
        event.stopPropagation();
    });
});
</script>


<?php include '_layout2.php' ;?>