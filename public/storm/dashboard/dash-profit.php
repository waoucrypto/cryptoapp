
<!--
PROFIT
-->
<div class="dash_profit">

<script src="/js/donutty.js"></script>
<script src="/js/vanilla.js"></script>

<strong>
<div class="tradingview_title">
<em>
<i class="fa-solid fa-circle-notch"></i>
</em>
<div>
<span><?= $latrad["Profit"][$_SESSION['langue']] ?></span>
<span><?= $latrad["Storm - report"][$_SESSION['langue']] ?></span>
</div>
</div>
<div class="dash_share">
<button id="generateImage"><?= $latrad["Share"][$_SESSION['langue']] ?> <i class="fa-brands fa-x-twitter"></i></button>
</div>
</strong>

<div class="dash_profit_dyna">
<span class="dash_profit_dyna1">$PEPE</span>
<div data-donutty data-value="75" dir="rtl"  data-anchor="top" data-color="#3fd2a4"></div>
<span class="dash_profit_dyna2">
<span>300%</span>
<span><?= $latrad["Profit"][$_SESSION['langue']] ?></span>
</span>
<span class="dash_profit_dyna3" style="color:#3fd2a4">$12.5k</span>
</div>

</div>