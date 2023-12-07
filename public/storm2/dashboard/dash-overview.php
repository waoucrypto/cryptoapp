
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
<span>Overview</span>
<span>KEY FIGURES</span>
</div>
</div>





<div class="dash_score">
<span><quote></quote><b>75<em>/100</em><u>Score</u></b><div><i></i><i></i><i></i><i></i></div></span>







</div>
</strong>

<ul>
<div id="overview_5m" style="display:none;">
<span><b onClick="overview_5m()" class="on">5M</b><b onClick="overview_1h()">1H</b><b onClick="overview_6h()">6H</b><b onClick="overview_24h()">24H</b></span>
<span><b>TXS</b><b>BUYS</b><b>SELLS</b><b>VOL</b><b>VAR</b></span>
<span><b>3</b><b>1</b><b>2</b><b>$1K</b><b class="red">-0.64%</b></span>
<span><b class="green2" style="width:10%"></b><b class="red2" style="width:90%"></b></span>
<span><b>BUYS</b><b>SELLS</b></span>
<span><b>$100</b><b>$900</b></span>
</div>
<div id="overview_1h">
<span><b onClick="overview_5m()">5M</b><b onClick="overview_1h()" class="on">1H</b><b onClick="overview_6h()">6H</b><b onClick="overview_24h()">24H</b></span>
<span><b>TXS</b><b>BUYS</b><b>SELLS</b><b>VOL</b><b>VAR</b></span>
<span><b>34</b><b>16</b><b>18</b><b>$92.89K</b><b class="red">-0.39%</b></span>
<span><b class="green2" style="width:20%"></b><b class="red2" style="width:80%"></b></span>
<span><b>BUYS</b><b>SELLS</b></span>
<span><b>$200</b><b>$800</b></span>
</div>
<div id="overview_6h" style="display:none;">
<span><b onClick="overview_5m()">5M</b><b onClick="overview_1h()">1H</b><b onClick="overview_6h()" class="on">6H</b><b onClick="overview_24h()">24H</b></span>
<span><b>TXS</b><b>BUYS</b><b>SELLS</b><b>VOL</b><b>VAR</b></span>
<span><b>148</b><b>67</b><b>81</b><b>$343.73K</b><b class="red">-1.92%</b></span>
<span><b class="green2" style="width:40%"></b><b class="red2" style="width:60%"></b></span>
<span><b>BUYS</b><b>SELLS</b></span>
<span><b>$400</b><b>$600</b></span>
</div>
<div id="overview_24h" style="display:none;">
<span><b onClick="overview_5m()">5M</b><b onClick="overview_1h()">1H</b><b onClick="overview_6h()">6H</b><b onClick="overview_24h()" class="on">24H</b></span>
<span><b>TXS</b><b>BUYS</b><b>SELLS</b><b>VOL</b><b>VAR</b></span>
<span><b>747</b><b>392</b><b>355</b><b>$2.05M</b><b class="green">+0.50%</b></span>
<span><b class="green2" style="width:70%"></b><b class="red2" style="width:30%"></b></span>
<span><b>BUYS</b><b>SELLS</b></span>
<span><b>$700</b><b>$300</b></span>
</div>
<li><span>Market cap</span><span>$469.24M</span></li>
<li><span>Liquidity</span><span>$10.70M <i class="fa-solid fa-lock"><em>Lock for 12 months</em></i></span></li>
<li><span>Supply</span><span>413.77T</span></li>
<li><span>Holders</span><span>143.92K</span></li>
<li><span>Txs</span><span>1.72M</span></li>
<li><span>Tax</span><span><b>B</b> <em>0%</em><u></u><b>S</b> <em>0%</em></span></li>	
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
