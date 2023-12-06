
<!--
TEMPLATE
-->
<div class="template">
<div class="template_background" onClick="template_close()"></div>
<div class="template_bloc">
<a class="template_bloc_close" onClick="template_close()"><i class="fa-solid fa-xmark"></i></a>
<strong>Template</strong>
<form>
<div class="template_left">
<ul>

<div class="template_left_w3">
<li><span>Supply</span><span><input type="text"></span></li>
<li><span>Mint Price</span><span><input type="text"></span></li>
<li><span>Mint Date</span><span><input type="text" placeholder="DD/MM/YYYY"></span></li>
</div>

<div class="template_left_w2">
<li><span>Website</span><span><input type="text" placeholder="https://"></span></li>
<li><span>Whitepaper</span><span><input type="text" placeholder="https://"></span></li>
</div>

<div class="template_left_w2">
<li><a href=""><i class="fa-brands fa-twitter"></i> Connect with Twitter</a></li>
<li><a href=""><i class="fa-brands fa-discord"></i> Connect with Discord</a></li>
</div>

<div class="template_left_w3">
<li><span>Role Team ID</span><span><input type="text" placeholder=""></span></li>
<li><span>Role Holder ID</span><span><input type="text" placeholder=""></span></li>
<li><span>Role Collab ID</span><span><input type="text" placeholder=""></span></li>
</div>

<div class="template_left_w2">
<li><a href=""><i class="fa-solid fa-upload"></i> Image Banner</a></li>
<li><a href=""><i class="fa-solid fa-upload"></i> Image About</a></li>
</div>

<div class="template_left_w1">
<li><span>About</span><span><textarea></textarea></span></li>
</div>

<a href="" class="cta_request pink">Save</a>
</ul>
</div>
</form>
</div>
</div>


<script>
function template_open(){
$('.template').css('display', 'flex');
}
function template_close(){
$('.template').css('display', 'none');
}
</script>
