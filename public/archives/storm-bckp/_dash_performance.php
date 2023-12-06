
<!--
PERFORMANCE
-->
<div class="dash_performance">

<strong>
<div class="tradingview_title">
<em>
<i class="fa-solid fa-wallet"></i>
<span class="material-symbols-outlined">
account_balance
</span>
</em>	
<div>
<span><?= $latrad["Performance"][$_SESSION['langue']] ?></span>
<span><?= $latrad["Storm - report"][$_SESSION['langue']] ?> <u>BOT</u></span>
</div>
</div>
<div class="dash_share">
<button id="generateImage"><?= $latrad["Share"][$_SESSION['langue']] ?> <i class="fa-brands fa-x-twitter"></i></button>
</div>
</strong>

<ul>
<li><span title="Total Costs = Total Buys + Total Fees"><?= $latrad["Total costs"][$_SESSION['langue']] ?></span><span>10 ETH</span></li>
<li><span title="Total Fees = Total Fees"><?= $latrad["Total fees"][$_SESSION['langue']] ?></span><span>1 ETH</span></li>
<li><span title="Total Sales = Total Proceeds"><?= $latrad["Total proceeds"][$_SESSION['langue']] ?></span><span class="green">5 ETH</span></li>
<li><span title="Potential ROI = 100 × (Current Price ÷ (Total Buys ÷ Quantity)) "><?= $latrad["Potential ROI"][$_SESSION['langue']] ?></span><span>+300%</span></li>
<li><span title="Potential Profit = Total Costs + Total Profit - Total Proceeds"><?= $latrad["Potential profit"][$_SESSION['langue']] ?></span><span>35 ETH</span></li>
<li><span title="Total Profit = Total Costs × Potential ROI"><?= $latrad["Total profit"][$_SESSION['langue']] ?></span><span class="green">30 ETH</span></li>
</ul>

</div>