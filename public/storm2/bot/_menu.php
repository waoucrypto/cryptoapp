
<!--
BOT SIDE
-->

<div class="bot_side">

<div class="bot_side_top">
<a href="index.php">
<span>
<svg version="1.1" id="a" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 560.2 560" style="enable-background:new 0 0 560.2 560;" xml:space="preserve">
<g>
	<path class="st0" d="M152.1,43c29.2,0,56.6,11.4,77.2,32l256.9,256.9c20.6,20.6,32,48.1,32,77.2c0,29.2-11.4,56.6-32,77.2
		c-20.6,20.6-48.1,32-77.2,32c-29.2,0-56.6-11.4-77.2-32L74.9,229.4c-20.6-20.6-32-48.1-32-77.2c0-29.2,11.4-56.6,32-77.2
		C95.5,54.4,122.9,43,152.1,43 M152.1,3C113.9,3,75.7,17.6,46.6,46.7l0,0c-58.3,58.3-58.3,152.7,0,211l256.9,256.9
		c29.1,29.1,67.3,43.7,105.5,43.7s76.4-14.6,105.5-43.7l0,0c58.3-58.3,58.3-152.7,0-211L257.6,46.7C228.5,17.6,190.3,3,152.1,3
		L152.1,3z"/>
</g>
<g>
	<path class="st0" d="M409,43c29.2,0,56.6,11.4,77.2,32c20.6,20.6,32,48.1,32,77.2c0,29.2-11.4,56.6-32,77.2L229.3,486.3
		c-20.6,20.6-48.1,32-77.2,32s-56.6-11.4-77.2-32c-20.6-20.6-32-48.1-32-77.2c0-29.2,11.4-56.6,32-77.2L331.8,75
		C352.4,54.4,379.8,43,409,43 M409,3c-38.2,0-76.4,14.6-105.5,43.7L46.6,303.6c-58.3,58.3-58.3,152.7,0,211l0,0
		c29.1,29.1,67.3,43.7,105.5,43.7s76.4-14.6,105.5-43.7l256.9-256.9c58.3-58.3,58.3-152.7,0-211l0,0C485.3,17.6,447.2,3,409,3L409,3
		z"/>
</g>
</svg>
<b>storm</b>
</span>
 <i class="fa-regular fa-pen-to-square"></i></a></a>
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
<a href="/storm2/bot/" class="on">Web Bot <i class="fa-solid fa-robot"></i></a>
<a href="/storm2/dashboard/">Dashboard <i class="fa-solid fa-chart-line"></i></a>
</span>
</div>
	
<ul>
<li><a href="/storm2/dashboard/"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
<li><a href="" target="_blank"><i class="fa-brands fa-telegram"></i>Telegram Bot</a></li>
<li><a href="/storm2/bot/"><i class="fa-solid fa-robot"></i> Web Bot</a></li>
<li><a href="#" id="toggleTheme" class="bot_side_circle"><i class="fa-solid fa-circle-half-stroke"></i>Dark/Light</a></li>
<li><a href="" target="_blank"><i class="fa-solid fa-book"></i> Help</a></li>
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
</script>