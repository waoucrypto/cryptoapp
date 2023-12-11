<?php include '_layout1.php' ;?>
<?php include '../trad.php' ;?>
<?php require_once(__DIR__ .'/../../api/init.php'); ?>


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







<?php 
function formatNumber($num) {
    if ($num >= 1000000) {
        return number_format($num / 1000000, 2) . 'M';
    } else if ($num >= 1000) {
        return number_format($num / 1000, 2) . 'K';
    } else {
        return (string)$num;
    }
}



function formatDateDiff($futureDate) {
  $now = new DateTime();
  $future = new DateTime($futureDate);
  $diff = $now->diff($future);

  $years = $diff->y;
  $months = $diff->m;
  $days = $diff->d;

  if ($years > 0) {
      // Format en années + mois si plus de 12 mois
      return "$years years and $months months";
  } elseif ($months > 0) {
      // Format en mois + jours si moins de 12 mois
      return "$months months and $days days ";
  } else {
      // Format en jours si moins de 30 jours
      return "$days days";
  }
}



?>

<?php 

$urlt = 'https://api.geckoterminal.com/api/v2/networks/eth/tokens/'. $parts[1] ;
$responset = callExternalAPI($urlt);
$arrayt = json_decode($responset, true);
$tokadd= $arrayt['data'];

$poolid = $tokadd['relationships']['top_pools']['data'][0]['id'];
$pool = explode('_', $poolid)[1];





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



function formatNumber(num) {
    if (num >= 1000000) {
        return (num / 1000000).toFixed(2) + 'M';
    } else if (num >= 1000) {
        return (num / 1000).toFixed(2) + 'K';
    } else {
        return num.toString();
    }
}
	
function updateWidths(greenWidth, redWidth, green, red) {
    // Assurez-vous que la somme des largeurs ne dépasse pas 100%
    var totalWidth = greenWidth + redWidth;
    if (totalWidth > 100) {
        console.error("La somme des largeurs ne doit pas dépasser 100%");
        return;
    }

    // Mise à jour des largeurs
    $('#'+green).css('width', greenWidth + '%');
    $('#'+red).css('width', redWidth + '%');
}

$(document).ready(function(){

 




function overviewtime(eth){
  console.log('leth',eth);
  $.ajax({
    url: 'https://open-api.dextools.io/free/v2/pool/ether/'+eth+'/price',
    method: 'GET',
    headers: {
        'X-BLOBR-KEY': 'iIiKdef28c4rhwBRBfkkgryNn3zXhVMB'
    },
    success: function(response) {

      $('#5mtxs').append(Math.round(response.data.buys5m+response.data.sells5m));
        $('#5mb').append(Math.round(response.data.buys5m));
        $('#5ms').append(Math.round(response.data.sells5m));
        response.data.volume5m ? $('#5mvol').append('$' + formatNumber(Math.round(response.data.volume5m))) :  $('#5mvol').append('-');
        $('#5mvar').append(Math.round(response.data.variation5m) + '%');
        response.data.buyVolume5m ?  $('#5mbuy').append('$' + formatNumber(Math.round(response.data.buyVolume5m) )):  $('#5mbuy').append('-');
        response.data.sellVolume5m ?  $('#5msell').append('$' + formatNumber(Math.round(response.data.sellVolume5m) )):  $('#5msell').append('-');


        updateWidths(20, 80, '5mbg', '5msr' ); 



        $('#1htxs').append(Math.round(response.data.buys1h+response.data.sells1h));
        $('#1hb').append(Math.round(response.data.buys1h));
        $('#1hs').append(Math.round(response.data.sells1h));
       $('#1hvol').append('$' + formatNumber(Math.round(response.data.volume1h)));
        $('#1hvar').append(Math.round(response.data.variation1h) + '%');
        $('#1hbuy').append('$' + formatNumber(Math.round(response.data.buyVolume1h) ));
        $('#1hsell').append('$' + formatNumber(Math.round(response.data.sellVolume1h) ));
var tot1h = Math.round(response.data.buys1h+response.data.sells1h);

 updateWidths(Math.round(response.data.buys1h)/tot1h, Math.round(response.data.sells1h)/tot1h, '5mbg', '5msr' ); 

        $('#6htxs').append(Math.round(response.data.buys6h+response.data.sells6h));
        $('#6hb').append(Math.round(response.data.buys6h));
        $('#6hs').append(Math.round(response.data.sells6h));
       $('#6hvol').append('$' + formatNumber(Math.round(response.data.volume6h)));
        $('#6hvar').append(Math.round(response.data.variation6h) + '%');
         $('#6hbuy').append('$' + formatNumber(Math.round(response.data.buyVolume6h) ));
        $('#6hsell').append('$' + formatNumber(Math.round(response.data.sellVolume6h) ));

        var tot6h = Math.round(response.data.buys6h+response.data.sells6h);

        console.log('calc',(response.data.buys6h/tot6h)*100, (response.data.sells6h/tot6h)*100 );


        updateWidths((response.data.buys6h/tot6h)*100, (response.data.sells6h/tot6h)*100, '6hbg', '6hsr' ); 

        $('#24htxs').append(Math.round(response.data.buys24h+response.data.sells24h));
        $('#24hb').append(Math.round(response.data.buys24h));
        $('#24hs').append(Math.round(response.data.sells24h));
        response.data.volume24h ? $('#24hvol').append('$' + formatNumber(Math.round(response.data.volume24h))):  $('#24hvol').append('-');
        $('#24hvar').append(Math.round(response.data.variation24h) + '%');
        response.data.buyVolume24h ? $('#24hbuy').append('$' + formatNumber(Math.round(response.data.buyVolume24h) )) : $('#24hbuy').append('-');
        response.data.sellVolume24h ? $('#24hsell').append('$' + formatNumber(Math.round(response.data.sellVolume24h) )) :  $('#24hsell').append('-');

    },
    error: function(xhr, status, error) {
      console.log('la rekkpo');   console.error(error);
    }
});

}




	
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
            <span>${calculateTimeDifference(item.attributes.pool_created_at)}</span>
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
                <span>${calculateTimeDifference(item.attributes.pool_created_at)}</span>
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
	
		
		
		//$('#holders').append(formatNumber(items.result['<?= $parts[1] ?>'].holder_count));	
		$('#buytax').append(items.result['<?= $parts[1] ?>'].buy_tax);	
		$('#selltax').append(items.result['<?= $parts[1] ?>'].sell_tax);	
		
	},
    error: function() {
    }
  });
			
  function reloadTradingViewWidget(theme, symbol) {
    var backgroundColor = theme === 'light' ? 'rgba(250, 250, 250, 1)' : 'rgba(0, 0, 0, 1)';
    $("#tradingview_40607").html('');
    new TradingView.widget({
      "autosize": true,
      "symbol": symbol,
      "interval": "D",
      "timezone": "Etc/UTC",
      "theme": theme,
      "style": "1",
      "locale": "fr",
      "enable_publishing": false,
      "hide_legend": true,
      "hide_side_toolbar": false,
      "backgroundColor": backgroundColor,
      "toolbar_bg": backgroundColor,
      "container_id": "tradingview_40607",
    });
  }

  $.ajax({
    url: 'https://api.geckoterminal.com/api/v2/networks/<?= $parts[0] ?>/tokens/<?= $parts[1] ?>/info', // Remplacez par l'URL réelle de votre API
      type: 'GET',
    dataType: 'json',
    success: function(response) {
      var items = response.data;
  console.log(items.id);
  consone.log('lesymbol ',symbol);

	 $('#cryptonom').append(items.attributes.name);	
	 $('#cryptosymbol').append(items.attributes.symbol);	
	 $('#cryptopair').append('<?= $parts[0] ?>');	
	 $('#cryptosymbolpair').append(items.attributes.symbol+' / <?= $parts[0] ?>');	
			 $('#score').append(Math.round(items.attributes.gt_score)+"<em>/100</em><u><?= $latrad["Score"][$_SESSION['langue']] ?></u>");	
			 $('#limage').attr("src", items.attributes.image_url);	
       var symbol = items.attributes.symbol;
       reloadTradingViewWidget("<?php echo $themeClass; ?>", symbol);
		
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
    //$('#supply').append("$"+formatNumber(items.attributes.fdv_usd));	
		 //$('#marketcap').append("$"+formatNumber(items.attributes.market_cap_usd) );	

		
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
		
		
  $.ajax({
    url: 'https://api.geckoterminal.com/api/v2/networks/eth/tokens/<?= $parts[1] ?>/pools?page=1', // Remplacez par l'URL réelle de votre API
      type: 'GET',
    dataType: 'json',
    success: function(response) {
      var items = response.data;
  console.log('ekkkkuh',items[0].attributes.address);
	overviewtime(items[0].attributes.address);

		
	},
    error: function() {
    }
  });


  $.ajax({
    url: 'https://open-api.dextools.io/free/v2/token/ether/<?= $parts[1] ?>/locks', // Remplacez par l'URL réelle de votre API
      type: 'GET',
    dataType: 'json',
    success: function(response) {
      var items = response.data;
  console.log('uiooiuoiu',items.nextUnlock.unlockDate);


  //$('#liquidity').append('$'+formatNumber(Math.round(items.amountLocked))+'<i class="fa-solid fa-lock"><em><?= $latrad["Lock for"][$_SESSION['langue']] ?> '+items.nextUnlock.unlockDate+' <?= $latrad["Months"][$_SESSION['langue']] ?></em></i>');	

		
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
	
	
	
function calculateTimeDifference(dateString) {
    // Créer un objet Date pour l'heure actuelle dans le fuseau horaire de la France
    const now = new Date().toLocaleString('en-US', { timeZone: 'Europe/Paris' });
    const nowDate = new Date(now);

    // Créer un objet Date pour la date fournie convertie dans le fuseau horaire de la France
    const then = new Date(dateString).toLocaleString('en-US', { timeZone: 'Europe/Paris' });
    const thenDate = new Date(then);

    // Calculer la différence en millisecondes
    const differenceInMilliseconds = nowDate - thenDate;

    // Convertir les millisecondes en minutes
    const differenceInMinutes = Math.floor(differenceInMilliseconds / 60000);

    // Calculer la différence en heures et jours
    const differenceInHours = Math.floor(differenceInMinutes / 60);
    const differenceInDays = Math.floor(differenceInHours / 24);
    const differenceInMonths = Math.floor(differenceInDays / 30);

    // Retourner le résultat en minutes, heures, ou jours
    if (differenceInMinutes < 60) {
        return differenceInMinutes + ' minutes';
    } else if (differenceInHours < 24) {
        return differenceInHours + ' hours';
    }else if (differenceInDays < 30) {
        return differenceInDays + ' days';
    } else {
        return differenceInMonths + ' months';
    }
}

// Exemple d'utilisation
console.log(calculateTimeDifference('2023-12-18T11:05:00.000Z'));


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