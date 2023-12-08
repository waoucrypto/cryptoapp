<meta charset="utf-8">

<!--
BUY / SELL
-->
<div class="dash_buysell">

<strong>
<div class="tradingview_title">
<em>
<i class="fa-solid fa-bullseye"></i>
<span class="material-symbols-outlined">
target
</span>
</em>
<div>
<span>Trading</span>
<span>STORM SNIPER <u>BOT</u></span>
</div>
</div>
<div class="dash_share">
<a onClick="settings_open()">Settings <i class="fa-solid fa-gear"></i></a>
</div>
</strong>

<ul id="buy">
<li><a class="on" onClick="buy()">Buy</a><a onClick="sell()">Sell</a><a onClick="snipe()">Snipe</a></li>
<li><a><i class="fa-solid fa-sack-dollar"></i>Buy 0.01 ETH</a><a> <i class="fa-solid fa-sack-dollar"></i> Buy 0.2 ETH</a></li>
<li><a><i class="fa-solid fa-sack-dollar"></i> Buy 0.5 ETH</a><a><i class="fa-solid fa-sack-dollar"></i> Buy 1 ETH</a></li>
<li><a><i class="fa-solid fa-sack-dollar"></i> Buy MaxTx</a><a><i class="fa-solid fa-sack-dollar"></i> Buy X ETH</a></li>
<li><a><i class="fa-solid fa-circle"></i> Anti-rug</a><a><i class="fa-solid fa-circle"></i> Blacklist</a></li>
<li><a><i class="fa-solid fa-rocket"></i> Slippage: Unlimited</a><a><i class="fa-solid fa-check"></i> Pre Approve</a></li>
</ul>
	
<ul id="sell" style="display:none;">
<li><a onClick="buy()">Buy</a><a class="on" onClick="sell()">Sell</a><a onClick="snipe()">Snipe</a></li>
<li><a><i class="fa-solid fa-sack-dollar"></i> Sell All Wallets</a><a><i class="fa-solid fa-sack-dollar"></i> Sell X Wallet</a></li>
<li><a><i class="fa-solid fa-sack-dollar"></i> Sell Initials Wallet</a><a><i class="fa-solid fa-sack-dollar"></i> Sell X ETH Wallet</a></li>
<li><a><i class="fa-solid fa-sack-dollar"></i> Sell W #1</a><a><i class="fa-solid fa-sack-dollar"></i> Transfer</a></li>
<li><a><i class="fa-solid fa-circle"></i> Anti-rug</a><a><i class="fa-solid fa-circle"></i> Blacklist</a></li>
<li><a><i class="fa-solid fa-rocket"></i> Slippage: 0%</a><a><i class="fa-solid fa-check"></i> Pre Approve</a></li>
</ul>
	
<ul id="snipe" style="display:none;">
<li><a onClick="buy()">Buy</a><a onClick="sell()">Sell</a><a class="on" onClick="snipe()">Snipe</a></li>
<li><a><i class="fa-solid fa-circle"></i> First Bundle or Fail</a></li>
<li><a><i class="fa-solid fa-circle"></i> MaxTx or Revert</a><a><i class="fa-solid fa-circle"></i> Min: Disabled</a></li>
<li><a><i class="fa-solid fa-circle"></i> Anti-rug</a><a><i class="fa-solid fa-circle"></i> Blacklist</a></li>
<li><a><i class="fa-solid fa-rocket"></i> Slippage: Unlimited</a><a><i class="fa-solid fa-check"></i> Pre Approve</a></li>
</ul>

</div>

<script>
function buy(){
$('.dash_buysell #sell, .dash_buysell #snipe').css('display', 'none');
$('.dash_buysell #buy').css('display', 'flex');
}
function sell(){
$('.dash_buysell #buy, .dash_buysell #snipe').css('display', 'none');
$('.dash_buysell #sell').css('display', 'flex');
}
function snipe(){
$('.dash_buysell #buy, .dash_buysell #sell').css('display', 'none');
$('.dash_buysell #snipe').css('display', 'flex');
}
</script>
