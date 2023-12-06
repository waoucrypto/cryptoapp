
<!--
DASH TOP
-->
<div class="dash_top">
<div class="dash_top_left">
<a href="index.php"><img src="images/logo-color.svg"><b>cornet</b></a>
<form>
<i class="fa-solid fa-magnifying-glass"></i>
<input type="text" placeholder="Search collab">
</form>
<ul>
<li class="on"><a href="dashboard_collections.php">Request for collabs</a></li>
<li><a href="dashboard2_requested.php">Asked for collabs</a></li>
</ul>
</div>
<div class="dash_top_right">
<a href=""><i class="fa-solid fa-circle-half-stroke"></i></a>
<a href=""><img src="https://pbs.twimg.com/profile_images/1589013940675264515/rDHfI-Ua_400x400.png"></a>
</div>
</div>

<!--
DASH TOP2
-->
<div class="dash_top2">
<div class="dash_top2_left">
<a href="dashboard_collections.php" <?php if($menu=='1'){echo 'class="on"';} ?>>Collections</a>
<a href="dashboard_requested.php" <?php if($menu=='2'){echo 'class="on"';} ?>>Requests</a>
<a href="dashboard_accepted.php" <?php if($menu=='3'){echo 'class="on"';} ?>>Accepted <em>2</em></a>
<a href="dashboard_refused.php" <?php if($menu=='4'){echo 'class="on"';} ?>>Declined</a>
<a href="dashboard_winners.php" <?php if($menu=='5'){echo 'class="on"';} ?>>Winners</a>
</div>
<div class="dash_top2_right">
<span>
<a href="#" onClick="template_open()"><i class="fa-solid fa-pen-to-square"></i> Edit template collab</a>
<a href="#" onClick="other_collect_open()"><img src="https://pbs.twimg.com/profile_images/1562687015203885056/mTiwCDoo_200x200.jpg"> Stay Cats <i class="fa-solid fa-chevron-down"></i></a>
</span>
<span>
<a href="dashboard_collections.php"><img src="https://pbs.twimg.com/profile_images/1562687015203885056/mTiwCDoo_200x200.jpg"> Stay Cats</a>
<a href="dashboard2_requested.php"><img src="https://pbs.twimg.com/profile_images/1626340174270713856/9wEXyVPp_400x400.jpg"> Doodles</a>
</span>
</div>
</div>


<script>
function other_collect_open(){
$('.dash_top2_right span:nth-child(2)').css('display', 'flex');
}
function other_collect_close(){
$('.dash_top2_right span:nth-child(2)').css('display', 'none');
}
</script>

<?php include '_template.php' ;?>


