
<!--
POPUP DETAIL
-->
<div class="popup_detail">
<div class="popup_detail_background" onClick="popup_detail_close()"></div>
<div class="popup_detail_bloc">
<a class="popup_detail_bloc_close" onClick="popup_detail_close()"><i class="fa-solid fa-xmark"></i></a>
<form>
<strong>More details</strong>
<ul>
<li><span>Name</span><span>Stay Cats x Doodles</span></li>
<li><span>Date end</span><span>20/02/2023</span></li>
<li><span>Spots</span><span>100</span></li>
<li><span>Follow Discord</span><span>Stay Cats</span></li>
<li><span>Holder role in Discord of "Doodles"</span><span>Yes</span></li>
<li><span>Follow Twitter</span><span>@staycatsnft</span></li>
<li><span>Like & Retweet</span><span>No</span></li>
<li><span>Image</span><span>Download <i class="fa-solid fa-download"></i></span></li>
<li><span>Text</span><span>Stay Cats is a fashion store IRL... <i class="fa-solid fa-copy"></i></span></li>
</ul>
</form>
</div>
</div>


<script>
function popup_detail_open(){
$('.popup_detail').css('display', 'flex');
}
function popup_detail_close(){
$('.popup_detail').css('display', 'none');
}
</script>
