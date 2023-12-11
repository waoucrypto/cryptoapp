
<?php
// api/getData.php


$url = 'https://open-api.dextools.io/free/v2/token/ether/'. $parts[1] .'/info';
$response = callExternalAPI($url);
$array = json_decode($response, true);
$d= $array['data'];


$urld = 'https://open-api.dextools.io/free/v2/token/ether/'. $parts[1] .'/locks';
$responsed = callExternalAPI($urld);
$arrayd = json_decode($responsed, true);
$dd= $arrayd['data'];


$urlt = 'https://open-api.dextools.io/free/v2/pool/ether/'.$pool.'/liquidity';
$responset = callExternalAPI($urlt);
$arrayt = json_decode($responset, true);
$dt= $arrayt['data'];








?>

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
<span><b id="score"></b><div><i></i><i></i><i></i><i></i></div></span>
</div>
</strong>


<ul>

<div id="overview_5m" style="display:none;">
<span><b onClick="overview_5m()" class="on">5M</b><!-- <b onClick="overview_1h()">1H</b>--> <b onClick="overview_6h()">6H</b><b onClick="overview_24h()">24H</b></span>
<span><b>TXS</b><b>BUYS</b><b>SELLS</b><b>VOL</b><b>VAR</b></span>
<span><b id="5mtxs"></b><b id="5mb"></b><b id="5ms"></b><b id="5mvol"></b><b class="red" id="5mvar"></b></span>
<span><b class="green2" id="5mbg"></b><b class="red2" id="5msr"></b></span>
<span><b>BUYS</b><b>SELLS</b></span>
<span><b id="5mbuy"></b><b id="5msell"></b></span>

</div>


<div id="overview_1h" style="display:none;">
<span><b onClick="overview_5m()">5M</b><!-- <b onClick="overview_1h()">1H</b>--><b onClick="overview_6h()">6H</b><b onClick="overview_24h()">24H</b></span>
<span><b>TXS</b><b>BUYS</b><b>SELLS</b><b>VOL</b><b>VAR</b></span>
<span><b id="1htxs"></b><b id="1hb"></b><b id="1hs"></b><b id="1hvol"></b><b class="red" id="1hvar"></b></span>
<span><b class="green2" style="width:20%"></b><b class="red2" style="width:80%"></b></span>
<span><b>BUYS</b><b>SELLS</b></span>
<span><b id="1hbuy"></b><b id="1hsell"></b></span>
</div>



<div id="overview_6h" >
<span><b onClick="overview_5m()">5M</b><!-- <b onClick="overview_1h()">1H</b>--><b onClick="overview_6h()" class="on">6H</b><b onClick="overview_24h()">24H</b></span>
<span><b>TXS</b><b>BUYS</b><b>SELLS</b><b>VOL</b><b>VAR</b></span>

<span><b id="6htxs"></b><b id="6hb"></b><b id="6hs"></b><b id="6hvol"></b><b class="red" id="6hvar"></b></span>

<span><b class="green2" id="6hbg"></b><b class="red2" id="6hsr"></b></span>

<span><b>BUYS</b><b>SELLS</b></span>
<span><b id="6hbuy"></b><b id="6hsell"></b></span>
</div>

<div id="overview_24h" style="display:none;">
<span><b onClick="overview_5m()">5M</b><!-- <b onClick="overview_1h()">1H</b>--><b onClick="overview_6h()">6H</b><b onClick="overview_24h()" class="on">24H</b></span>
<span><b>TXS</b><b>BUYS</b><b>SELLS</b><b>VOL</b><b>VAR</b></span>
<span><b id="24htxs"></b><b id="24hb"></b><b id="24hs"></b><b id="24hvol"></b><b class="red" id="24hvar"></b></span>
<span><b class="green2" style="width:70%"></b><b class="red2" style="width:30%"></b></span>
<span><b>BUYS</b><b>SELLS</b></span>
<span><b id="24hbuy"></b><b id="24hsell"></b></span>
</div>

<li><span><?= $latrad["Market cap"][$_SESSION['langue']] ?></span><span id="marketcap"><?= formatNumber($d['fdv']) ?></span></li>
<li><span><?= $latrad["Liquidity"][$_SESSION['langue']] ?></span><span id="liquidity"> <?= formatNumber($dt['liquidity']) ?> <?php if($dd) : ?> <i class="fa-solid fa-lock"><em><?= $latrad["Lock for"][$_SESSION['langue']] ?> <?= formatDateDiff($dd['nextUnlock']['unlockDate']);  ?> </em></i><?php endif; ?>	</span></li>
<li><span><?= $latrad["Supply"][$_SESSION['langue']] ?></span><span id="supply"><?= formatNumber($d['totalSupply']) ?></span></li>
<li><span><?= $latrad["Holders"][$_SESSION['langue']] ?></span><span id="holders"><?= formatNumber($d['holders']) ?></span></li>
<li><span><?= $latrad["Transactions"][$_SESSION['langue']] ?></span><span id=""><?= formatNumber($d['transactions']) ?></span></li>
<li><span><?= $latrad["Tax"][$_SESSION['langue']] ?></span><span><b><?= $latrad["B"][$_SESSION['langue']] ?></b> <em id="buytax"></em><u></u><b><?= $latrad["S"][$_SESSION['langue']] ?></b> <em id="selltax"></em></span></li>	
<li></li>
<li></li>
<li></li>
<li></li>	
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
