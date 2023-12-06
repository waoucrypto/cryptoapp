<meta charset="utf-8">

<!--
BUY / SELL
-->
<div class="dash_buysell">

<strong>
<div class="tradingview_title">
<em>
<i class="fa-solid fa-bullseye"></i>
</em>
<div>
<span><?= $latrad["Trading"][$_SESSION['langue']] ?></span>
<span><?= $latrad["Storm - sniper"][$_SESSION['langue']] ?> <u>BOT</u></span>
</div>
</div>
<div class="dash_share">
<a href="#" onClick="settings_open()"><?= $latrad["Settings"][$_SESSION['langue']] ?> <i class="fa-solid fa-gear"></i></a>
</div>
</strong>

<ul id="buy">
<li><a href="#" class="on" onClick="buy()"><?= $latrad["Buy"][$_SESSION['langue']] ?></a><a href="#" onClick="sell()"><?= $latrad["Sell"][$_SESSION['langue']] ?></a><a href="#" onClick="snipe()"><?= $latrad["Snipe"][$_SESSION['langue']] ?></a></li>
<li><a href=""><i class="fa-solid fa-sack-dollar"></i><?= $latrad["Buy"][$_SESSION['langue']] ?> 0.01 ETH</a><a href=""> <i class="fa-solid fa-sack-dollar"></i> <?= $latrad["Buy"][$_SESSION['langue']] ?> 0.2 ETH</a></li>
<li><a href=""><i class="fa-solid fa-sack-dollar"></i> <?= $latrad["Buy"][$_SESSION['langue']] ?> 0.5 ETH</a><a href=""><i class="fa-solid fa-sack-dollar"></i> <?= $latrad["Buy"][$_SESSION['langue']] ?> 1 ETH</a></li>
<li><a href=""><i class="fa-solid fa-sack-dollar"></i> <?= $latrad["Buy MaxTX"][$_SESSION['langue']] ?></a><a href=""><i class="fa-solid fa-sack-dollar"></i> <?= $latrad["Buy X ETH"][$_SESSION['langue']] ?></a></li>
<li><a href=""><i class="fa-solid fa-circle"></i> <?= $latrad["Anti-Rug"][$_SESSION['langue']] ?></a><a href=""><i class="fa-solid fa-circle"></i> <?= $latrad["Blacklist"][$_SESSION['langue']] ?></a></li>
<li><a href=""><i class="fa-solid fa-rocket"></i> <?= $latrad["Slippage: Unlimited"][$_SESSION['langue']] ?></a><a href=""><i class="fa-solid fa-check"></i> <?= $latrad["Pre Approve"][$_SESSION['langue']] ?></a></li>
</ul>
	
<ul id="sell" style="display:none;">
<li><a href="#" onClick="buy()"><?= $latrad["Buy"][$_SESSION['langue']] ?></a><a href="#" class="on" onClick="sell()"><?= $latrad["Sell"][$_SESSION['langue']] ?></a><a href="#" onClick="snipe()"><?= $latrad["Snipe"][$_SESSION['langue']] ?></a></li>
<li><a href=""><i class="fa-solid fa-sack-dollar"></i> <?= $latrad["Sell All Wallets"][$_SESSION['langue']] ?></a><a href=""><i class="fa-solid fa-sack-dollar"></i> <?= $latrad["Sell X Wallet"][$_SESSION['langue']] ?></a></li>
<li><a href=""><i class="fa-solid fa-sack-dollar"></i> <?= $latrad["Sell Initials Wallet"][$_SESSION['langue']] ?></a><a href=""><i class="fa-solid fa-sack-dollar"></i> <?= $latrad["Sell X ETH Wallet"][$_SESSION['langue']] ?></a></li>
<li><a href=""><i class="fa-solid fa-sack-dollar"></i> <?= $latrad["Sell W #1"][$_SESSION['langue']] ?> #1</a><a href=""><i class="fa-solid fa-sack-dollar"></i> <?= $latrad["Transfer"][$_SESSION['langue']] ?></a></li>
<li><a href=""><i class="fa-solid fa-circle"></i> <?= $latrad["Anti-Rug"][$_SESSION['langue']] ?></a><a href=""><i class="fa-solid fa-circle"></i> <?= $latrad["Blacklist"][$_SESSION['langue']] ?></a></li>
<li><a href=""><i class="fa-solid fa-rocket"></i> <?= $latrad["Slippage: 0%"][$_SESSION['langue']] ?></a><a href=""><i class="fa-solid fa-check"></i> <?= $latrad["Pre Approve"][$_SESSION['langue']] ?></a></li>
</ul>
	
<ul id="snipe" style="display:none;">
<li><a href="#" onClick="buy()"><?= $latrad["Buy"][$_SESSION['langue']] ?></a><a href="#" onClick="sell()"><?= $latrad["Sell"][$_SESSION['langue']] ?></a><a href="#" class="on" onClick="snipe()"><?= $latrad["Snipe"][$_SESSION['langue']] ?></a></li>
<li><a href=""><i class="fa-solid fa-circle"></i> <?= $latrad["First Bundle or Fail"][$_SESSION['langue']] ?></a></li>
<li><a href=""><i class="fa-solid fa-circle"></i> <?= $latrad["MaxTX or Revert"][$_SESSION['langue']] ?></a><a href=""><i class="fa-solid fa-circle"></i> <?= $latrad["Min: Disabled"][$_SESSION['langue']] ?></a></li>
<li><a href=""><i class="fa-solid fa-circle"></i> <?= $latrad["Anti-Rug"][$_SESSION['langue']] ?></a><a href=""><i class="fa-solid fa-circle"></i> <?= $latrad["Blacklist"][$_SESSION['langue']] ?></a></li>
<li><a href=""><i class="fa-solid fa-rocket"></i> <?= $latrad["Slippage: Unlimited"][$_SESSION['langue']] ?></a><a href=""><i class="fa-solid fa-check"></i> <?= $latrad["Pre Approve"][$_SESSION['langue']] ?></a></li>
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
