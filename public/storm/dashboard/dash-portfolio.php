
<!--
PORTFOLIO
-->
<div class="dash_list dash_portfolio">

<strong>
<div class="tradingview_title">
<em>
<i class="fa-solid fa-star"></i>
</em>
<div>
<span><?= $latrad["Portfolio"][$_SESSION['langue']] ?></span>
<span><?= $latrad["Storm - orders"][$_SESSION['langue']] ?></span>
</div>
</div>
</strong>

<ul>

<li>
<a>
<span><?= $latrad["Name"][$_SESSION['langue']] ?></span>
<span><?= $latrad["1H"][$_SESSION['langue']] ?></span>
<span><?= $latrad["Profit"][$_SESSION['langue']] ?></span>
<span></span>
</a>
</li>

<?php for ($i = 0; $i < 10; $i++): ?>
<li id="token">
<a>
<span><img src="/images/otsea.png"><div><b>Otsea</b><em>OTSEA / ETH</em></div></span>
<span class="green">+20%</span>
<span>2 ETH</span>
<span><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-plus"></i></span>
</a>
</li>
<?php endfor; ?>

</ul>

</div>