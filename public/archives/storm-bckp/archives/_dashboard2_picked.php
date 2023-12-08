
<!--
POPUP PICKED
-->
<div class="popup_picked">
<div class="popup_picked_background" onClick="popup_picked_close()"></div>
<div class="popup_picked_bloc">
<a class="popup_picked_bloc_close" onClick="popup_picked_close()"><i class="fa-solid fa-xmark"></i></a>
<form>
<strong>Picked</strong>
<ul>
<li><a class="on">From Alphabot</a><a>From Premint</a></li>
<li><a><i class="fa-solid fa-upload"></i> Upload CSV</a></li>
<li><span>Wallet address</span><span><em class="on"><a></a><a></a></em></span></li>
<li><span>Discord</span><span><em class="on"><a></a><a></a></em></span></li>
<li><span>Discord ID</span><span><em class="on"><a></a><a></a></em></span></li>
<li><span>Twitter</span><span><em class="on"><a></a><a></a></em></span></li>
<li><span>Twitter ID</span><span><em><a></a><a></a></em></span></li>
<li><span>Amount</span><span><em><a></a><a></a></em></span></li>
</ul>
<a href="dashboard_requested.php" class="cta_request pink">Send</a>
</form>
</div>
</div>


<script>
function popup_picked_open(){
$('.popup_picked').css('display', 'flex');
}
function popup_picked_close(){
$('.popup_picked').css('display', 'none');
}
</script>
