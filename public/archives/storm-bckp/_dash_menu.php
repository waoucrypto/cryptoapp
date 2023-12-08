
<!--
HEADER
-->
<div class="dash_header">
<div class="dash_header_top_left">
<a href="/dashboard"><img src="/storm/images/logo-color.svg"><b>storm</b></a>
<form onClick="search_open()">
<i class="fa-solid fa-magnifying-glass"></i>
<span><?= $latrad["Search pair by symbol, name, contract or token"][$_SESSION['langue']] ?></span>
</form>
</div>
<div class="dash_header_top_right">
<span><i class="fa-solid fa-gas-pump"></i> <?= $datas['gasPriceInGwei']  ?> </span>
<a target="_blank" class="dash_header_top_right_circle"><i class="fa-solid fa-book-open"></i></a>
<a id="toggleTheme" class="dash_header_top_right_circle"><i class="fa-solid fa-circle-half-stroke"></i></a>
<a target="_blank" class=""><?= $latrad["Follow us"][$_SESSION['langue']] ?> <i class="fa-brands fa-x-twitter"></i></a>
<a href="/dashboard" class="on"><?= $latrad["Dashboard"][$_SESSION['langue']] ?> <i class="fa-solid fa-chart-line"></i></a>
<a href="/storm/bot.php"><?= $latrad["Web Bot"][$_SESSION['langue']] ?> <i class="fa-solid fa-robot"></i></a>
<a target="_blank"><?= $latrad["Telegram Bot"][$_SESSION['langue']] ?> <i class="fa-brands fa-telegram"></i></a>
<em id="lacrypto"> <i class="fa-solid fa-angle-down"></i></em>
</div>
</div>

<script>
	
	function shortenCryptoAddress(address, length = 4) {
    if (address.length > (length * 2)) {
        return address.substr(0, length) + "..." + address.substr(-length);
    }
    return address;
}

	const fullAddress = "<?php echo $_SESSION['user_address'] ?>";
const shortAddress = shortenCryptoAddress(fullAddress); // returns "0x89...beef"
  document.getElementById('lacrypto').innerHTML = shortAddress + ' <i class="fa-solid fa-angle-down"></i>';

	
	
	
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