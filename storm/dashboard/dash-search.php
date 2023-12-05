
<!--
SEARCH
-->
<div class="search">
<div class="search_bloc">
<div class="dash_list dash_search">
<ul>
<li>
<a>
<span><?= $latrad["Name"][$_SESSION['langue']] ?></span>
<span><?= $latrad["1H"][$_SESSION['langue']] ?></span>
<span><?= $latrad["Trend"][$_SESSION['langue']] ?></span>
<span><?= $latrad["Snipe"][$_SESSION['langue']] ?></span>
</a>
</li>
<?php for ($i = 1; $i <= 10; $i++): ?>
<li id="token">
<a href="">
<span><img src="/images/pepe.jpg"><div><b>Pepe</b><em>PEPE / ETH</em></div></span>
<span class="green">+20%</span>
<span>#<?php echo $i; ?></span>
<span><?= $latrad["Buy"][$_SESSION['langue']] ?></span>
</a>
</li>
<?php endfor; ?>
</ul>
</div>
</div>
</div>

<script>
$(document).ready(function() {
    // Ouvre le menu de recherche
    function search_open() {
        setTimeout(function() {$('.search').css('display', 'flex');}, 100);
        $('.dash_header_search form input').focus();
        $('.dash_header_search form').addClass( "focus" );
        $('.dash_header_search form').animate({width:'400px',},100);
    }

    // Ajoutez des gestionnaires pour ouvrir le menu de recherche
    $('.search, .dash_header_search form').on('click', function(e) {
        search_open();
        e.stopPropagation(); // Empêche la propagation de l'événement
    });

    // Cacher le menu de recherche en cliquant en dehors
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.search, .dash_header_search form').length) {
            $('.search').hide();
            $('.dash_header_search form').removeClass( "focus" );
            $('.dash_header_search form').animate({width:'200px',},0);
        }
    });
});
</script>
