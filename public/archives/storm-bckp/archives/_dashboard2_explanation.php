
<!--
POPUP EXPLANATION
-->
<div class="popup_explanation">
<div class="popup_explanation_background" onClick="popup_explanation_close()"></div>
<div class="popup_explanation_bloc">
<a class="popup_explanation_bloc_close" onClick="popup_explanation_close()"><i class="fa-solid fa-xmark"></i></a>
<form>
<strong>Explanation</strong>
<ul>
<li>
<span>You can leave an explanation if you wish. (Optional)</span>
<span><textarea></textarea></span>
</li>
</ul>
<a href="dashboard2_refused.php" class="cta_request red">Decline</a>
</form>
</div>
</div>


<script>
function popup_explanation_open(){
$('.popup_explanation').css('display', 'flex');
}
function popup_explanation_close(){
$('.popup_explanation').css('display', 'none');
}
</script>
