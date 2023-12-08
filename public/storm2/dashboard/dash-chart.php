
<!--
CHART
-->
<div class="dash_chart">

<strong>
<div class="tradingview_title">
<img src="/images/pepe.jpg"> 
<div>
<span>Pepe</span>
<span>PEPE / USDT</span>
</div>
</div>
<div class="tradingview_link">
<span>Official links</span>	
<ul>
<li><a target="_blank"><img src="/images/logos/etherscan.png"></a></li>
<li><a target="_blank"><img src="/images/logos/web.svg"></a></li>
<li><a target="_blank"><img src="/images/logos/x.svg"></a></li>
<li><a target="_blank"><img src="/images/logos/telegram.svg"></a></li>
<li><a target="_blank"><img src="/images/logos/coingecko.png"></a></li>
<li><a target="_blank"><img src="/images/logos/coinmarketcap.jpg"></a></li>
</ul>
</div>
<div class="dash_price">
<span>$0.00000113</span>
</div>
<div class="dash_pair">
<span><em>PEPE</em> <a target="_blank">0X698...1933</a> <i class="fa-regular fa-copy"></i></span>
<span><em>POOL</em> <a target="_blank">0XA43...EC9F</a> <i class="fa-regular fa-copy"></i></span>
</div>
<div class="dash_warning">
<span><em>Renounced</em></span>
<span><em>Yes</em></span>
</div>
<div class="dash_warning">
<span><em>Honeypot</em></span>
<span><em>No</em></span>
</div>
<div class="dash_warning">
<span><em>Pool created</em></span>
<span><em>6 months ago</em></span>
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
        "symbol": "UNISWAP3ETH:PEPEUSDT",
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

