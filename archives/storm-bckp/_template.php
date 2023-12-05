
<!--
TEMPLATE
-->
<div class="template">
<div class="template_background" onClick="template_close()"></div>
<div class="template_bloc">
<a class="template_bloc_close" onClick="template_close()"><i class="fa-solid fa-xmark"></i></a>
<strong>Search</strong>
<form>
<div class="template_left">
<ul>

<div class="template_left_w1">
<li><span>Contract, Token</span><span><input type="text"></span></li>
</div>


<a href="" class="cta_request">Save</a>
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
