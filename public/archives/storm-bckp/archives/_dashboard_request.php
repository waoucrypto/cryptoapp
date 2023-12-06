
<!--
POPUP RESQUEST
-->
<div class="popup_request">
<div class="popup_request_background" onClick="popup_request_close()"></div>
<div class="popup_request_bloc">
<a class="popup_request_bloc_close" onClick="popup_request_close()"><i class="fa-solid fa-xmark"></i></a>
<form>
<strong>Request</strong>
<ul>
<li><span>Spots</span><span><input type="text" value="10"></span></li>
<li><span>Follow Discord</span><span><em class="on"><a></a><a></a></em></span></li>
<li><span>Holder role in Discord of "Doodles"</span><span><em class="on"><a></a><a></a></em></span></li>
<li><span>Follow Twitter</span><span><em class="on"><a></a><a></a></em></span></li>
<li><span>Like & Retweet</span><span><em><a></a><a></a></em></span></li>
<li><span>Tweet ID</span><span><input type="text" value="" class="tweet_id"></span></li>
<li><span>Share to frens</span><span><em><a></a><a></a></em></span></li>
</ul>
<a href="dashboard_requested.php" class="cta_request pink">Request</a>
</form>
</div>
</div>


<script>
function popup_request_open(){
$('.popup_request').css('display', 'flex');
}
function popup_request_close(){
$('.popup_request').css('display', 'none');
}
</script>
