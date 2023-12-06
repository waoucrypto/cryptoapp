
<!--
OVERVIEW
-->
<div class="dash_overview">

<strong>
<div class="tradingview_title">
<em>
<i class="fa-solid fa-layer-group"></i>
</em>
<div>
<span><?= $latrad["Overview"][$_SESSION['langue']] ?></span>
<span><?= $latrad["Storm - key figures"][$_SESSION['langue']] ?></span>
</div>
</div>
<div class="dash_score">
<span><b id="score"></b></span>
</div>
</strong>

<ul>
<div id="overview_5m">
<span><b onClick="overview_5m()" class="on"><?= $latrad["5M"][$_SESSION['langue']] ?></b><b onClick="overview_1h()"><?= $latrad["1H"][$_SESSION['langue']] ?></b><b onClick="overview_6h()"><?= $latrad["6H"][$_SESSION['langue']] ?></b><b onClick="overview_24h()"><?= $latrad["24H"][$_SESSION['langue']] ?></b></span>
<span><b><?= $latrad["Txs"][$_SESSION['langue']] ?></b><b><?= $latrad["Buys"][$_SESSION['langue']] ?></b><b><?= $latrad["Sells"][$_SESSION['langue']] ?></b><b><?= $latrad["Vol"][$_SESSION['langue']] ?></b><b><?= $latrad["Var"][$_SESSION['langue']] ?></b></span>
<span><b>x</b><b id="5b"></b><b id="5v"></b><b>x</b><b class="red">x</b></span>
<span><b class="green2" style="width:10%"></b><b class="red2" style="width:90%"></b></span>
<span><b><?= $latrad["Buys"][$_SESSION['langue']] ?></b><b><?= $latrad["Sells"][$_SESSION['langue']] ?></b></span>
<span><b>$100</b><b>$900</b></span>
</div>
<div id="overview_1h" style="display:none;">
<span><b onClick="overview_5m()"><?= $latrad["5M"][$_SESSION['langue']] ?></b><b onClick="overview_1h()" class="on"><?= $latrad["1H"][$_SESSION['langue']] ?></b><b onClick="overview_6h()"><?= $latrad["6H"][$_SESSION['langue']] ?></b><b onClick="overview_24h()"><?= $latrad["24H"][$_SESSION['langue']] ?></b></span>
<span><b><?= $latrad["Txs"][$_SESSION['langue']] ?></b><b><?= $latrad["Buys"][$_SESSION['langue']] ?></b><b><?= $latrad["Sells"][$_SESSION['langue']] ?></b><b><?= $latrad["Vol"][$_SESSION['langue']] ?></b><b><?= $latrad["Var"][$_SESSION['langue']] ?></b></span>
<span><b>x</b><b id="1bp"></b><b id="1sp"></b><b id="1vol"></b><b class="red" id="1change"></b></span>
<span id="1ch"></span>
<span><b><?= $latrad["Buys"][$_SESSION['langue']] ?></b><b><?= $latrad["Sells"][$_SESSION['langue']] ?></b></span>
<span><b>$200</b><b>$800</b></span>
</div>
<div id="overview_6h" style="display:none;">
<span><b onClick="overview_5m()"><?= $latrad["5M"][$_SESSION['langue']] ?></b><b onClick="overview_1h()"><?= $latrad["1H"][$_SESSION['langue']] ?></b><b onClick="overview_6h()" class="on"><?= $latrad["6H"][$_SESSION['langue']] ?></b><b onClick="overview_24h()"><?= $latrad["24H"][$_SESSION['langue']] ?></b></span>
<span><b><?= $latrad["Txs"][$_SESSION['langue']] ?></b><b><?= $latrad["Buys"][$_SESSION['langue']] ?></b><b><?= $latrad["Sells"][$_SESSION['langue']] ?></b><b><?= $latrad["Vol"][$_SESSION['langue']] ?></b><b><?= $latrad["Var"][$_SESSION['langue']] ?></b></span>
<span><b>x</b><b id="6b"></b><b id="6v"></b><b>x</b><b class="red">x</b></span>
<span><b class="green2" style="width:40%"></b><b class="red2" style="width:60%"></b></span>
<span><b><?= $latrad["Buys"][$_SESSION['langue']] ?></b><b><?= $latrad["Sells"][$_SESSION['langue']] ?></b></span>
<span><b>$400</b><b>$600</b></span>
</div>
<div id="overview_24h" style="display:none;">
<span><b onClick="overview_5m()"><?= $latrad["5M"][$_SESSION['langue']] ?></b><b onClick="overview_1h()"><?= $latrad["1H"][$_SESSION['langue']] ?></b><b onClick="overview_6h()"><?= $latrad["6H"][$_SESSION['langue']] ?></b><b onClick="overview_24h()" class="on"><?= $latrad["24H"][$_SESSION['langue']] ?></b></span>
<span><b><?= $latrad["Txs"][$_SESSION['langue']] ?></b><b><?= $latrad["Buys"][$_SESSION['langue']] ?></b><b><?= $latrad["Sells"][$_SESSION['langue']] ?></b><b><?= $latrad["Vol"][$_SESSION['langue']] ?></b><b><?= $latrad["Var"][$_SESSION['langue']] ?></b></span>
<span><b>x</b><b id="24bp"></b><b id="24sp"></b><b id="24vol"></b><b class="green" id="24change"></b></span>
<span><b class="green2" style="width:70%"></b><b class="red2" style="width:30%"></b></span>
<span><b><?= $latrad["Buys"][$_SESSION['langue']] ?></b><b><?= $latrad["Sells"][$_SESSION['langue']] ?></b></span>
<span><b>$700</b><b>$300</b></span>
</div>
<li><span><?= $latrad["Market cap"][$_SESSION['langue']] ?></span><span id="marketcap"></span></li>
<li><span><?= $latrad["Liquidity"][$_SESSION['langue']] ?></span><span id="liquidity"></span></li>
<li><span><?= $latrad["Supply"][$_SESSION['langue']] ?></span><span id="supply"></span></li>
<li><span><?= $latrad["Holders"][$_SESSION['langue']] ?></span><span id="holders"></span></li>
<li><span><?= $latrad["Transactions"][$_SESSION['langue']] ?></span><span>1.72M</span></li>
<li><span><?= $latrad["Tax"][$_SESSION['langue']] ?></span><span><b><?= $latrad["B"][$_SESSION['langue']] ?></b> <em id="buytax"></em><u></u><b><?= $latrad["S"][$_SESSION['langue']] ?></b> <em id="selltax"></em></span></li>	
</ul>

</div>

<script>
function overview_5m(){
$('#overview_1h, #overview_6h, #overview_24h, #overview_7d').css('display', 'none');
$('#overview_5m').css('display', 'flex');
}
function overview_1h(){
$('#overview_5m, #overview_6h, #overview_24h, #overview_7d').css('display', 'none');
$('#overview_1h').css('display', 'flex');
}
function overview_6h(){
$('#overview_5m, #overview_1h, #overview_24h, #overview_7d').css('display', 'none');
$('#overview_6h').css('display', 'flex');
}
function overview_24h(){
$('#overview_5m, #overview_1h, #overview_6h, #overview_7d').css('display', 'none');
$('#overview_24h').css('display', 'flex');
}
function overview_7d(){
$('#overview_5m, #overview_1h, #overview_6h, #overview_24h').css('display', 'none');
$('#overview_7d').css('display', 'flex');
}
</script>
