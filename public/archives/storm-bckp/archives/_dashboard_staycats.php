
<!--
DASH TABLE
-->
<div class="dash_detail">

<div class="dash_detail_title">
<span><img src="https://pbs.twimg.com/profile_images/1562687015203885056/mTiwCDoo_200x200.jpg"> Stay Cats <quote><i class="fa-solid fa-certificate"></i><i class="fa-solid fa-check"></i></quote></span>
<span>
<a class="cta_accept green" onClick="popup_accepted_open()">Accept</a>
<a class="cta_refuse red" onClick="popup_explanation_open()">Decline</a>
<a class="cta_published green">Published</a>
<a class="cta_picked pink" onClick="popup_picked_open()">Picked</a>
<a class="cta_refused grey2 border5"><em class="red"></em> Refused</a>
</span>
</div>

<div class="dash_detail_content">

<div class="dash_detail_explanation">
<strong>Explanation</strong>
<p>
The project is interesting but no information on the price of mint and supply. But I wish you the best.
</p>
</div>

<div class="dash_detail_requirements">
<strong><span>Requirements</span> <span><a class="cta_edit border" onClick="popup_request_open()"><i class="fa-solid fa-pen"></i></a></span></strong>
<ul>
<li><em class="green2">100</em><span>Spots<br>Allocated</span></li>
<li><i class="fa-regular fa-circle-xmark green2"></i><span>Follow<br>Discord</span></li>
<li><i class="fa-regular fa-circle-check green2"></i><span>Follow<br>Twitter</span></li>
<li><i class="fa-regular fa-circle-check red2"></i><span>Like &<br>Retweet</span></li>
<li><i class="fa-regular fa-circle-xmark red2"></i><span>Share<br>to frens</span></li>
<li><a onClick="popup_detail_open()">More</a></li>
</ul>
</div>

<div class="dash_detail_keys">
<strong>Key Figures</strong>
<ul>
<li><span>20 047</span><span>Twitter <a href="https://twitter.com/" target="_blank"><i class="fa-solid fa-up-right-from-square"></i></a></span></li>
<li><span>4 989</span><span>Discord <a href="https://discord.com/" target="_blank"><i class="fa-solid fa-up-right-from-square"></i></a></span></li>
<li><span>TBA</span><span>Mint Price</span></li>
<li><span>TBA</span><span>Supply</span></li>
</ul>
</div>

<div class="dash_detail_about">
<strong>About</strong>
<p>
Stay Cats is a fashion store IRL, available only for NFT holders and nobody else. Founders have been working with LVMH Group & Richmond for over 10 years. Stay Cats is also<em>...</em> <a onClick="read_more()" class="read_more">Read more</a> <span style="display:none;"> a technology with a NFC chip encoded and integrated into the clothing that allows with a dedicated application to certify that the garment received is both authentic, but also that you are the sole owner, and which guarantees that it was produced in limited edition only for our future holders. 
<br><br>
But that's not all, because it's also access to a real community of NFT holders where you can see where all the holders are in the world, if there are any near you. And with whom you can chat from the app ! <a onClick="read_less()" class="read_less" style="display:none;">Read less</a></span>
</p>
<img src="https://staycats.com/assets/img/app.png">
</div>

</div>

</div>

<script>
function read_more(){
$('.dash_detail_about p span').show();
$('.dash_detail_about p a.read_more, .dash_detail_about p em').hide();
$('.dash_detail_about p a.read_less').show();
}
function read_less(){
$('.dash_detail_about p span').hide();
$('.dash_detail_about p a.read_more, .dash_detail_about p em').show();
$('.dash_detail_about p a.read_less').hide();
}
</script>
