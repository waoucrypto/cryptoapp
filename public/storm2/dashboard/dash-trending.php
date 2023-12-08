
<!--
TRENDING
-->
<div class="dash_list dash_trending">

<strong>
<div class="tradingview_title">
<em>
<i class="fa-solid fa-fire"></i>
</em>
<div>
<span>Trending</span>
<span>HOT TOKENS</span>
</div>
</div>
</strong>

<ul>
	
<li>
<a>
<span>Name</span>
<span>1H</span>
<span>Trend</span>
<span></span>
</a>
</li>

<?php for ($i = 1; $i <= 10; $i++): ?>
<li id="token">
<a>
<span><img src="/images/doge.jpg"><div><b>Dogecoin</b><em>DOGE / ETH</em></div></span>
<span class="green">+20%</span>
<span>#<?php echo $i; ?></span>
<span><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-plus"></i></span>
</a>
</li>
<?php endfor; ?>

</ul>

</div>
