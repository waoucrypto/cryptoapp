
<!--
POPUP ACCEPTED
-->
<div class="popup_accepted">
<div class="popup_accepted_background" onClick="popup_accepted_close()"></div>
<div class="popup_accepted_bloc">
<a class="popup_accepted_bloc_close" onClick="popup_accepted_close()"><i class="fa-solid fa-xmark"></i></a>
<strong>Accept</strong>
<form>
<div class="popup_accepted_left">
<ul>
<div class="popup_accepted_left_w1">
<li><span>Name</span><span><input type="text" value="Stay Cats x Doodles" class="input_off" readonly></span></li>
</div>
<div class="popup_accepted_left_w2">
<li><span>Spots</span><span><input type="text" value="100" class="input_off" readonly></span></li>
<li><span>Date end</span><span><input type="text" value="20/02/2023" class="input_off" readonly></span></li>
</div>
<div class="popup_accepted_left_w3">
<li><span>Server ID</span><span><input type="text" value="1007567627918516234" class="input_off" readonly></span></li>
<li><span>Server name</span><span><input type="text" value="Doodles" class="input_off" readonly></span></li>
<li><span>Server link</span><span><input type="text" value="discord.gg/doodles" class="input_off" readonly></span></li>
</div>
<div class="popup_accepted_left_w2">
<li><span>Holder role ID</span><span><input type="text" value="180756762791854837" class="input_off" readonly></span></li>
<li><span>Holder role name</span><span><input type="text" class="input_off" value="Doodler" readonly></span></li>
</div>
<a href="dashboard2_accepted.php" class="cta_request green">Accept</a>
</ul>
</div>
</form>
</div>
</div>


<script>
function popup_accepted_open(){
$('.popup_accepted').css('display', 'flex');
}
function popup_accepted_close(){
$('.popup_accepted').css('display', 'none');
}
</script>
