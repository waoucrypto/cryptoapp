<?php include '_layout1.php' ;?>
<?php include '../trad.php' ;?>


<?php
session_start();
if (isset($_COOKIE['theme'])) {
    $_SESSION['theme'] = $_COOKIE['theme'];
}
if (!isset($_SESSION['theme'])) {
    $_SESSION['theme'] = 'dark';
}
$themeClass = $_SESSION['theme'];

if (!isset($_SESSION['langue'])) {
  $_SESSION['langue'] = 'en';
}

?>


	<?php
	 if($_GET['address']){
				  $address = $_GET['address'];
    $parts = explode('_', $address);
	 }else{
    $address = 'eth_x3';
    $parts = explode('_', $address);
   }
		 
	?>	 

<script>
	
	
	function truncateAddress(address, startLength = 5, endLength = 4) {
 return address.substring(0, startLength) + '...' + address.substring(address.length - endLength);
  }
		
	
	// Définir les intervalles de temps
var now = new Date();
var oneHourAgo = new Date(now.getTime() - (60 * 60 * 1000));
var sixHoursAgo = new Date(now.getTime() - (6 * 60 * 60 * 1000));
var oneDayAgo = new Date(now.getTime() - (24 * 60 * 60 * 1000));
var fiveMinutesAgo = new Date(now.getTime() - (5 * 60 * 1000));

// Initialiser les compteurs
var counts = {
    sell: { '24h': 0, '6h': 0, '1h': 0, '5min': 0 },
    buy: { '24h': 0, '6h': 0, '1h': 0, '5min': 0 }
};
	
	
	
	function getFormattedDateDifference(pastDate) {
    const currentDate = new Date();
    const pastDateObject = new Date(pastDate);

    // Différence en millisecondes
    const diff = currentDate - pastDateObject;

    // Convertir en différentes unités de temps
    const minutes = Math.floor(diff / (1000 * 60));
    const hours = Math.floor(diff / (1000 * 60 * 60));
    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const months = Math.floor(days / 30);

    // Afficher le résultat selon la durée
    if (months >= 3) {
        return months + " months ago";
    } else if (days >= 3) {
        return days + " days ago";
    } else if (hours >= 3) {
        return hours + " hours ago";
    } else {
        return minutes + " minutes ago";
    }
}


	
	
	
	
$(document).ready(function(){
	
	$.ajax({
  url: 'https://api.geckoterminal.com/api/v2/networks/eth/new_pools?page=1',
  type: 'GET',
  dataType: 'json',
  success: function(response) {
    var items = response.data;

    // Vérifie si le paramètre 'address' est présent dans l'URL
    var urlParams = new URLSearchParams(window.location.search);
    if (!urlParams.has('address') && items.length > 0) {
      // Redirige vers la nouvelle URL avec l'ID de l'adresse du premier élément
      window.location.href = '/storm/dashboard?address=' + items[0].relationships.base_token.data.id;
      return; // Arrête l'exécution ultérieure du succès de la requête
    }

    $.each(items, function(index, item) {
      var listItem = `
        <li>
          <a href="?address=${item.relationships.base_token.data.id}">
            <span>
              <div>
                <b>${item.attributes.name}</b> 
              </div>
            </span>
            <span class="${item.attributes.price_change_percentage.h24 > 0 ? 'green': 'red'}">${item.attributes.price_change_percentage.h24}%</span>
            <span>${calculateDifferenceInMinutes(item.attributes.pool_created_at)} MIN</span>
            <span><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-plus"></i></span>
          </a>
        </li>
      `;
      $('#liste-elements').append(listItem);
    });
  },
  error: function() {
    console.log('Erreur lors de la requête AJAX');
    $('#liste-elements').append('<li>Erreur de chargement des données.</li>');
  }
});


	
	
  $.ajax({
    url: 'https://api.geckoterminal.com/api/v2/networks/eth/pools?page=1', // Remplacez par l'URL réelle de votre API
      type: 'GET',
    dataType: 'json',
    success: function(response) {
      var items = response.data;
		
		console.log('laliste ',items);
      $.each(items, function(index, item) {
        var listItemb = `
          <li>
            <a href="?address=${item.relationships.base_token.data.id}">
              <span>
              
                <div>
                  <b>${item.attributes.name}</b> 
              
                </div>
              </span>
                <span class="${item.attributes.price_change_percentage.h24 > 0 ? 'green': 'red'}">${item.attributes.price_change_percentage.h24}%</span>
                <span>${calculateDifferenceInMinutes(item.attributes.pool_created_at)} MIN</span>
                <span><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-plus"></i></span>
            </a>
          </li>
        `;
        $('#liste-elementsbest').append(listItemb);
      });
    },
    error: function() {
      $('#liste-elementsbest').append('<li>Erreur de chargement des données.</li>');
    }
  });
	

  $.ajax({
    url: 'https://api.gopluslabs.io/api/v1/rugpull_detecting/1?contract_addresses=<?= $parts[1] ?>', // Remplacez par l'URL réelle de votre API
      type: 'GET',
    dataType: 'json',
    success: function(response) {
      var items = response;
  console.log("la liste",items.result.owner.owner_type);
		
		if(items.result.owner.owner_type === 'blackhole'){
		    $('#renounced').append('YES');	
		   }else{
		    $('#renounced').append('NO');	
		   }
	
	},
    error: function() {
    }
  });
			
			
			  $.ajax({
    url: 'https://api.gopluslabs.io/api/v1/token_security/1?contract_addresses=<?= $parts[1] ?>', // Remplacez par l'URL réelle de votre API
      type: 'GET',
    dataType: 'json',
    success: function(response) {
      var items = response;
  console.log("le listo",items.result['<?= $parts[1] ?>'].is_honeypot);
	
		var totalLiquidity = items.result['<?= $parts[1] ?>'].dex.reduce(function (accumulator, dexEntry) {
    return accumulator + parseFloat(dexEntry.liquidity);
}, 0);
		
		
		
		
		
		if(items.result['<?= $parts[1] ?>'].is_honeypot == '0'){
		    $('#honeypot').append('NO');	
		   }else{
		    $('#honeypot').append('YES');	
		   }
	
		
		$('#liquidity').append('$'+Math.round(totalLiquidity)+'<i class="fa-solid fa-lock"><em><?= $latrad["Lock for"][$_SESSION['langue']] ?> 12 <?= $latrad["Months"][$_SESSION['langue']] ?></em></i>');	
		$('#holders').append(items.result['<?= $parts[1] ?>'].holder_count);	
		$('#buytax').append(items.result['<?= $parts[1] ?>'].buy_tax);	
		$('#selltax').append(items.result['<?= $parts[1] ?>'].sell_tax);	
		
	},
    error: function() {
    }
  });
			
			

  $.ajax({
    url: 'https://api.geckoterminal.com/api/v2/networks/<?= $parts[0] ?>/tokens/<?= $parts[1] ?>/info', // Remplacez par l'URL réelle de votre API
      type: 'GET',
    dataType: 'json',
    success: function(response) {
      var items = response.data;
  console.log(items.id);
	 $('#cryptonom').append(items.attributes.name);	
	 $('#cryptosymbol').append(items.attributes.symbol);	
	 $('#cryptopair').append('<?= $parts[0] ?>');	
	 $('#cryptosymbolpair').append(items.attributes.symbol+' / <?= $parts[0] ?>');	
			 $('#score').append(Math.round(items.attributes.gt_score)+"<em>/100</em><u><?= $latrad["Score"][$_SESSION['langue']] ?></u>");	
			 $('#limage').attr("src", items.attributes.image_url);	

		
		
		if(items.attributes.websites[0]){
		      $('#lienSite').attr('href', items.attributes.websites[0] );
		}else{
		      $('#lienSite').hide( );
		}
		
		if(items.attributes.telegram_handle){
		        $('#lienTelegram').attr('href', 'https://t.me/'+items.attributes.telegram_handle );
 
		   }else{
		         $('#lienTelegram').hide( );
		   }
		
		if(items.attributes.twitter_handle){
		         $('#lienTwitter').attr('href', 'https://twitter.com/'+items.attributes.twitter_handle );

		   }else{
		         $('#lienTwitter').hide( );

		   }
		
		if(items.attributes.discord_url){
		        $('#lienDiscord').attr('href', 'https://twitter.com/'+items.attributes.discord_url );
 
		   }else{
		        $('#lienDiscord').hide( );
 
		   }

	},
    error: function() {
    }
  });

	
  $.ajax({
    url: 'https://api.geckoterminal.com/api/v2/networks/<?= $parts[0] ?>/tokens/<?= $parts[1] ?>', // Remplacez par l'URL réelle de votre API
      type: 'GET',
    dataType: 'json',
    success: function(response) {
      var items = response.data;
  console.log(items.id);
	 $('#cryptoprix').append("$"+items.attributes.price_usd);	
    $('#supply').append("$"+items.attributes.fdv_usd);	
		 $('#marketcap').append("$"+items.attributes.market_cap_usd );	

		
		console.log('pools',items.relationships.top_pools.data[0].id);
		let adresse = items.relationships.top_pools.data[0].id;
		let parties = adresse.split('_');

		console.log(parties);
		  $.ajax({
    url: 'https://api.geckoterminal.com/api/v2/networks/'+parties[0]+'/pools/'+parties[1], // Remplacez par l'URL réelle de votre API
      type: 'GET',
    dataType: 'json',
    success: function(response) {
      var items = response.data;
  console.log('salut');
		
	var	add1 = items.relationships.base_token.data.id;
	var	add2 = items.relationships.quote_token.data.id;
	let partie1 = add1.split('_');
	let partie2 = add2.split('_');

	 $('#cryptosymboladd').append(truncateAddress(partie1[1]));	
	$('#cryptopairadd').append(truncateAddress(partie2[1]));	
		console.log('change1h',items.attributes.price_change_percentage);
$('#1change').append(items.attributes.price_change_percentage.h1+"%");
$('#24change').append(items.attributes.price_change_percentage.h24+"%");
$('#1vol').append(items.attributes.price_change_percentage.h1+"%");
$('#24vol').append("$"+Math.round(items.attributes.volume_usd.h24/1000)+"K");
		
		
		$('#1bp').append(items.attributes.transactions.h1.buys);
		$('#1sp').append(items.attributes.transactions.h1.sells);
		
		var totalh1 = items.attributes.transactions.h1.buys + items.attributes.transactions.h1.sells;
		var totalh24 = items.attributes.transactions.h24.buys + items.attributes.transactions.h24.sells;
		
				$('#1ch').append('<b class="green2" style="width:'+Math.round(items.attributes.transactions.h1.buys*100/totalh1)+'%"></b><b class="red2" style="width:'+Math.round(items.attributes.transactions.h1.sells*100/totalh1)+'%"></b>');

			$('#24bp').append(items.attributes.transactions.h24.buys);
		$('#24sp').append(items.attributes.transactions.h24.sells);
			$('#24ch').append('<b class="green2" style="width:'+Math.round(items.attributes.transactions.h24.buys*100/totalh24)+'%"></b><b class="red2" style="width:'+Math.round(items.attributes.transactions.h24.sells*100/totalh24)+'%"></b>');


		
                     $('#poolcreated').append(getFormattedDateDifference(items.attributes.pool_created_at));
		
		  $.ajax({
    url: 'https://api.geckoterminal.com/api/v2/networks/'+parties[0]+'/pools/'+parties[1]+'/trades', // Remplacez par l'URL réelle de votre API
      type: 'GET',
    dataType: 'json',
    success: function(response) {
      var items = response.data;
  console.log('euh',items);
	

		
		
		items.forEach(function(transaction) {
			
    var timestamp = new Date(transaction.attributes.block_timestamp);
    var kind = transaction.attributes.kind;

    // Vérifier si la transaction est dans l'intervalle de temps
    if (timestamp > oneDayAgo) counts[kind]['24h']++;
    if (timestamp > sixHoursAgo) counts[kind]['6h']++;
    if (timestamp > oneHourAgo) counts[kind]['1h']++;
    if (timestamp > fiveMinutesAgo) counts[kind]['5min']++;
});

// Afficher les résultats
console.log("Transactions Sell en 24h:", counts.sell['24h']);
console.log("Transactions Buy en 24h:", counts.buy['24h']);
		
		     $('#5b').append(counts.buy['5min']);
		$('#5v').append(counts.sell['5min']);
			$('#1b').append(counts.buy['1h']);
		$('#1v').append(counts.sell['1h']);
				$('#6b').append(counts.buy['6h']);
		$('#6v').append(counts.sell['6h']);
				$('#24b').append(counts.buy['24h']);
		$('#24v').append(counts.sell['24h']);

	},
    error: function() {
    }
  });
		
		
		
	},
    error: function() {
    }
  });
		
		
		
		
		
		
		
	
	},
    error: function() {
    }
  });
});
	
	
	
function calculateDifferenceInMinutes(dateString) {
  // Créer un objet Date pour l'heure actuelle dans le fuseau horaire de la France
  const now = new Date().toLocaleString('en-US', { timeZone: 'Europe/Paris' });
  const nowDate = new Date(now);

  // Créer un objet Date pour la date fournie convertie dans le fuseau horaire de la France
  const then = new Date(dateString).toLocaleString('en-US', { timeZone: 'Europe/Paris' });
  const thenDate = new Date(then);

  // Calculer la différence en millisecondes
  const differenceInMilliseconds = nowDate - thenDate;

  // Convertir les millisecondes en minutes et retourner le résultat
  return Math.floor(differenceInMilliseconds / 60000);
}


</script>



<!--
DASH
-->
<div class="dash <?php echo $themeClass; ?>">

<?php $menu=''; include '_menu.php' ;?>

<div class="dash_bloc_center"></div>
<div class="dash_bloc_right"></div>
<div class="dash_bloc_left"></div>

<div class="dash_left_top"><?php include 'dash-latest.php' ;?></div>
<div class="dash_left_bottom"><?php include 'dash-trending.php' ;?></div>
<div class="dash_center_top"><?php include 'dash-chart.php' ;?></div>
<div class="dash_center_bottom1"><?php include 'dash-overview.php' ;?></div>
<div class="dash_center_bottom2"><?php include 'dash-buy.php' ;?></div>
<div class="dash_center_bottom3"><?php include 'dash-profit.php' ;?></div>
<div class="dash_right_top"><?php include 'dash-portfolio.php' ;?></div>
<div class="dash_right_bottom"><?php include 'dash-performance.php' ;?></div>

<?php include 'dash-share.php' ;?>

<!--
SETTINGS
-->
<div class="settings">
<div class="settings_background" onClick="settings_close()"></div>	
<?php include 'dash-settings.php' ;?>
</div>


</div><!-- END DASH -->


<?php include '_layout2.php' ;?>