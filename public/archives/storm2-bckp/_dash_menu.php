
<!--
HEADER
-->
<div class="dash_header">
<div class="dash_header_top_left">
<a href="dashboard.php"><img src="/storm/images/logo-color.svg"><b>storm</b></a>
<form onClick="search_open()">
<i class="fa-solid fa-magnifying-glass"></i>
<span>Contract, Token</span>
</form>
</div>
<div class="dash_header_top_right">
<span><i class="fa-solid fa-gas-pump"></i> 15.25</span>
<a href="" target="_blank" class="dash_header_top_right_circle"><i class="fa-solid fa-book-open"></i></a>
<a href="#" id="toggleTheme" class="dash_header_top_right_circle"><i class="fa-solid fa-circle-half-stroke"></i></a>
<a href="" target="_blank" class="">Follow us <i class="fa-brands fa-x-twitter"></i></a>
<a href="" target="_blank" class="">Buy us a coffee <i class="fa-solid fa-mug-hot"></i></a>
<a href="dashboard.php" class="on">Dashboard <i class="fa-solid fa-chart-simple"></i></a>
<a href="bot.php">Web Bot <i class="fa-solid fa-robot"></i></a>
<a href="" target="_blank">Telegram Bot <i class="fa-brands fa-telegram"></i></a>
<em>0X898...4521 <i class="fa-solid fa-angle-down"></i></em>
</div>
</div>

<script>	
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