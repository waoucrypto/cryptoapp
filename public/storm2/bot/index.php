<?php include '_layout1.php' ;?>

<!--
BOT
-->
<div class="dash">

<div class="bot">

<div class="bot_mobile">
<a onclick="bot_mobile_side_open()"><span></span><span></span></a>
<a href="index.php">Storm</a>
<a href="index.php"><i class="fa-regular fa-pen-to-square"></i></a>
</div>

<div class="bot_left"><?php include '_menu.php' ;?></div>
<?php include 'bot-prompt.php' ;?>
</div>

</div><!-- END DASH -->


<script>
$(document).ready(function() {
    if (window.matchMedia("(max-width: 700px)").matches) {
        $(".bot_mobile a:nth-child(1)").click(function(event) {
            event.preventDefault(); 
            $('.bot_left').show().animate({"left":"0"}, 200);
            $('.bot_bottom').animate({"left":"75%", "right":"-75%","opacity":0.2}, 200);
            $('.bot_empty').animate({"left":"75%", "right":"-75%","opacity":0.2}, 200);
            $('.bot_center').animate({"left":"75%", "right":"-75%","opacity":0.2}, 200);
            $('.bot_mobile').animate({"left":"75%", "right":"-75%","opacity":0.2}, 200);
            event.stopPropagation(); 
        });

        $(document).click(function() {
            $('.bot_left').animate({"left":"-75%"}, 200).delay().slideDown().fadeOut();
            $('.bot_bottom').animate({"left":"0", "right":"0","opacity":1}, 200)
            $('.bot_empty').animate({"left":"0", "right":"0","opacity":1}, 200)
            $('.bot_center').animate({"left":"0", "right":"0","opacity":1}, 200)
            $('.bot_mobile').animate({"left":"0", "right":"0","opacity":1}, 200)
        });

        $('.bot_left').click(function(event) {      
            event.stopPropagation();
        });
    }
});
</script>


<?php include '_layout2.php' ;?>