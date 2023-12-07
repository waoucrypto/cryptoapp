
<!--
CHART
-->
<div class="dash_chart">

<strong>
<div class="tradingview_title">
<img id= "limage" > 
<div>
<span id="cryptonom"></span>
<span id="cryptosymbolpair"></span>
</div>
</div>
<div class="tradingview_link">
<span><?= $latrad["Official links"][$_SESSION['langue']] ?></span>	
<ul>
<li><a href="https://etherscan.io/address/<?= $parts[1]  ?>" target="_blank"><img src="/images/logos/etherscan.png"></a></li>
<li><a id="lienSite" href="" target="_blank"><img src="/images/logos/web.svg"></a></li>
<li><a id="lienTwitter" target="_blank"><img src="/images/logos/x.svg"></a></li>
<li><a id="lienDiscord" target="_blank"><img src="/images/logos/x.svg"></a></li>
<li><a id="lienTelegram" target="_blank"><img src="/images/logos/telegram.svg"></a></li>
<li><a id="lienCg" target="_blank"><img src="/images/logos/coingecko.png"></a></li>
<li><a id="lienCmc" target="_blank"><img src="/images/logos/coinmarketcap.jpg"></a></li>
</ul>
</div>
<div class="dash_price">
<span id="cryptoprix"></span>
</div>
<div class="dash_pair">
<span><em id="cryptosymbol"></em> <a href="" target="_blank" id="cryptosymboladd"></a> <i class="fa-regular fa-copy"></i></span>
<span><em id="cryptopair"></em> <a href="" target="_blank" id="cryptopairadd"></a> <i class="fa-regular fa-copy"></i></span>
</div>
<div class="dash_warning">
<span><em><?= $latrad["Renounced"][$_SESSION['langue']] ?></em></span>
<span><em id="renounced"></em></span>
</div>
<div class="dash_warning">
<span><em><?= $latrad["Honeypot"][$_SESSION['langue']] ?></em></span>
<span><em id="honeypot"></em></span>
</div>
<div class="dash_warning">
<span><em><?= $latrad["Pool created"][$_SESSION['langue']] ?></em></span>
<span><em id="poolcreated"></em></span>
</div>
</strong>



<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="height:100%;width:calc(100% + 2px);margin-left:-1px;background-color:backgroundColor !important;">
<div id="tradingview_40607" style="height:101%;width:100%;background-color:backgroundColor !important;"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  function reloadTradingViewWidget(theme) {
  var backgroundColor = theme === 'light' ? 'rgba(250, 250, 250, 1)' : 'rgba(0, 0, 0, 1)';
      $("#tradingview_40607").html('');
      new TradingView.widget({
        "autosize": true,
        "symbol": "COWETH",
        
        "interval": "D",
        "timezone": "Etc/UTC",
        "theme": theme,
        "style": "1",
        "locale": "fr",
        "enable_publishing": false,
        "hide_legend": true,
        "hide_side_toolbar": false,
  		  "backgroundColor": backgroundColor,
		    "toolbar_bg": backgroundColor,
        "container_id": "tradingview_40607",
      });
    }
    $(document).ready(function() {
      reloadTradingViewWidget("<?php echo $themeClass; ?>");
    });
  </script>
</div>
<!-- TradingView Widget END -->

<div class="dash_chart_toolbar_top"></div>
<div class="dash_chart_toolbar_left"></div>

</div>
