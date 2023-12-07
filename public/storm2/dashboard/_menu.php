
<!--
HEADER
-->
<div class="dash_header">

<!--
HEADER LEFT
-->
<div class="dash_header_top_left">

<div class="dash_header_logo">
<a href="index.php"> 
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
</a>
</div>

<div class="dash_header_nav">
<a href="/storm2/dashboard/" class="on">Dashboard <i class="fa-solid fa-chart-simple"></i></a>
<a href="/storm2/bot/">Web Bot <i class="fa-solid fa-robot"></i></a>
<a href="" target="_blank">Telegram Bot <i class="fa-brands fa-telegram"></i></a>
</div>

<div class="dash_header_search">
<form>
<i class="fa-solid fa-magnifying-glass"></i>
<input type="text" placeholder="Contract, Token" onClick="search_open()">
</form>
<div class="search">
<div class="search_bloc">
<?php include 'dash-search.php' ;?>
</div>
</div>
</div>

</div>

<!--
HEADER RIGHT
-->
<div class="dash_header_top_right">
<div class="dash_header_nav">
<span><i class="fa-solid fa-gas-pump"></i> 15.25</span>
<a href="" target="_blank" class="">Buy us a coffee <i class="fa-solid fa-mug-hot"></i></a>
</div>
<div class="dash_header_nav">
<em>0X898...4521 <i class="fa-solid fa-angle-down"></i></em>
</div>
<div class="dash_header_nav">
<a href="" target="_blank" class="dash_header_top_right_circle"><i class="fa-brands fa-x-twitter"></i></a>
<a href="" target="_blank" class="dash_header_top_right_circle"><i class="fa-solid fa-book"></i></a>
<a href="#" id="toggleTheme" class="dash_header_top_right_circle"><i class="fa-solid fa-circle-half-stroke"></i></a>
<a href="#" onClick="settings_open()" class="dash_header_top_right_circle"><i class="fa-solid fa-gear"></i></a>
</div>
</div>

</div>

<script>	
$(document).ready(function(){
    $('#toggleTheme').click(function(){
        $('body').toggleClass('light');
        var theme = $('body').hasClass('light') ? 'light' : 'dark';
        $.ajax({
            url: '../toggle_theme.php',
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