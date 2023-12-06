
<!--
SEARCH
-->
<div class="search_bloc">
<div class="search_bloc_title">Search <i class="fa-solid fa-xmark" onClick="settings_close()"></i></div>

<form>
<input type="text" placeholder="Contract, Token"><i class="fa-solid fa-magnifying-glass"></i>

<div class="dash_list dash_search">
<ul>

<li>
<a>
<span>Name</span>
<span>1H</span>
<span>Age</span>
<span>Snipe</span>
</a>
</li>

<?php for ($i = 1; $i <= 20; $i++): ?>
<li id="token">
<a href="">
<span><img src="/storm/images/pepe.jpg"><div><b>Pepe</b><em>PEPE / ETH</em></div></span>
<span class="green">+20%</span>
<span>20MIN</span>
<span>Buy</span>
</a>
</li>
<?php endfor; ?>

</ul>
</div>

</form>
</div>

<script>
function search_open(){
$('.search').css('display', 'flex');
$('.search_background').animate({opacity: '1'}, 200);
$('.search_bloc').animate({marginTop: '13px'}, 100);
$('.search_bloc form input').focus();
}
function search_close(){
$('.search').css('display', 'none');
$('.search_background').animate({opacity: '0'}, 0);
$('.search_bloc').animate({marginTop: '13px'}, 0);
}
	
$(document).ready(function() {
    $('.search_bloc ul li#token').on('click', function() {
        $('.search').hide(); // Cela cache l'élément avec la classe .search
        // Si vous souhaitez le retirer du DOM, utilisez $('.search').remove();
    });
});
</script>
