
<!--
BOT SIDE
-->

<div class="bot_side">

<div class="bot_side_top">
<a href="bot.php"><span><img src="/storm/images/logo-color.svg"><b>storm</b></span> <i class="fa-regular fa-pen-to-square"></i></a></a>
</div>

<div class="bot_side_center">
<ul>
<li><b>Portfolio</b></li>
<li><a href="#" id="token"><span>$PEPE</span></a></li>
<li><a href="#"><span>$DOGE</span></a></li>
<li><a href="#"><span>$JOE</span></a></li>
<li><a href="#"><span>$SHIBA</span></a></li>
<li><a href="#"><span>$OTSEA</span></a></li>
</ul>
</div>


<div class="bot_side_bottom">

<div>
<span>
<a href=""><i class="fa-solid fa-user-plus"></i> Refer a friend <i class="fa-solid fa-plus"></i></a>
</span>
<span>
<a href="#" onClick="bot_menu()"><i class="fa-regular fa-circle-user"></i> 0X898...4521 <i class="fa-solid fa-angle-down"></i></a>
</span>
<span>
<a href="bot.php" class="on">Web Bot <i class="fa-solid fa-robot"></i></a>
<a href="dashboard.php">Dashboard <i class="fa-solid fa-chart-line"></i></a>
</span>
</div>
	
<ul>
<li><a href="dashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
<li><a href="" target="_blank"><i class="fa-brands fa-telegram"></i>Telegram Bot</a></li>
<li><a href="bot.php"><i class="fa-solid fa-robot"></i> Web Bot</a></li>
<li><a href="#" id="toggleTheme" class="bot_side_circle"><i class="fa-solid fa-circle-half-stroke"></i>Dark/Light</a></li>
<li><a href="" target="_blank"><i class="fa-solid fa-book-open"></i> Help</a></li>
<li><a href="" target="_blank"><i class="fa-brands fa-x-twitter"></i> Follow us</a></li>
<li><a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</a></li>
</ul>
</div>
	
<div class="bot_side_gas">
<i class="fa-solid fa-gas-pump"></i> 15.25
</div>

</div>

<script>
$(document).ready(function() {
    // Lorsque l'utilisateur clique sur le lien
    $(".bot_side_bottom span:nth-child(2) a").click(function(event) {
        event.preventDefault(); // Empêche le comportement par défaut du lien
        $('.bot_side_bottom ul').toggle(); // Alterne l'affichage du menu
        event.stopPropagation(); // Empêche l'événement de se propager à document
    });

    // Cliquez à l'extérieur pour fermer
    $(document).click(function() {
        $('.bot_side_bottom ul').hide(); // Cache le menu
    });

    // Empêcher le menu de se fermer lorsqu'on clique à l'intérieur
    $('.bot_side_bottom ul').click(function(event) {
        event.stopPropagation(); // Empêche l'événement de se propager à document
    });
});
				   
$(document).ready(function(){
    $('#toggleTheme').click(function(){
        $('div.dash').toggleClass('light');
        var theme = $('div.dash').hasClass('light') ? 'light' : 'dark';
        $.ajax({
            url: 'toggle_theme.php',
            type: 'POST',
            data: {theme: theme},
            success: function(response){
                console.log("Thème changé avec succès !");
            }
        });
        reloadTradingViewWidget(theme);
    });
});
</script>