
<!--
SEARCH
-->
<div class="search">
<div class="search_background" onClick="search_close()"></div>

<?php include '_search.php' ;?>

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
