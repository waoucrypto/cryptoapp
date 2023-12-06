<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Document sans titre</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

<div id="content"></div>

<script>
function fetchData(url) {
    return $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html'
    });
}

function parseHTML(htmlString) {
    var parser = new DOMParser();
    var doc = parser.parseFromString(htmlString, "text/html");
    return doc;
}

function displayItems(doc) {
    // Supposons que vous cherchiez des divs avec une certaine classe pour vos éléments
    var $items = selectElements("div.tgme_widget_message_bubble", doc);

       $items.each(function() {
        var $item = $(this);
        var token = getText($item.find('.tgme_widget_message_text a').first());
        var tokenStatus = getText($item.find('.tgme_widget_message_text b u'));
        var contractAddress = getText($item.find('.tgme_widget_message_text code'));
        var deployerLink = getAttribute($item.find('.tgme_widget_message_text a[href*="etherscan.io/address"]'), 'href');
        var taxes = $item.find('.tgme_widget_message_text').contents().filter(function() { return this.nodeType == 3; }).last().text().trim().split('-')[0].trim();
        var supply = getText($item.find('.tgme_widget_message_text').contents().filter(function() { return this.nodeValue && this.nodeValue.includes('Supply:'); }).next('b'));
        
        // Status icons
        var verified = $item.find('.tgme_widget_message_text').html().includes('Verified <i') ? "Verified" : "Not Verified";
        var tradingEnabled = $item.find('.tgme_widget_message_text').html().includes('Trading Enabled <i') ? "Trading Enabled" : "Trading Not Enabled";
        var lpLocked = $item.find('.tgme_widget_message_text').html().includes('LP Locked <i') ? "LP Locked" : "LP Not Locked";
        
        var itemData = {
            token: token,
            tokenStatus: tokenStatus,
            contractAddress: contractAddress,
            deployerLink: deployerLink,
            taxes: taxes,
            supply: supply,
            verified: verified,
            tradingEnabled: tradingEnabled,
            lpLocked: lpLocked
        };

        $('#content').append(buildHTMLItem(itemData));
    });

}

function selectElements(selector, context) {
    return $(selector, context);
}

function getAttribute($element, attrName) {
    return $element.attr(attrName);
}

function getText($element) {
    return $element.text().trim(); // Utilisez .trim() pour nettoyer les espaces blancs
}

function buildHTMLItem(itemData) {
    // Construire l'HTML pour chaque élément
    return `
        <div class="item">
            <div class="token">${itemData.token}</div>
            <div class="token-status">${itemData.tokenStatus}</div>
            <div class="contract">${itemData.contractAddress}</div>
            <div class="deployer">${itemData.deployerLink}</div>
            <div class="taxes">${itemData.taxes}</div>
            <div class="supply">${itemData.supply}</div>
            <div class="verified">${itemData.verified}</div>
            <div class="trading-enabled">${itemData.tradingEnabled}</div>
            <div class="lp-locked">${itemData.lpLocked}</div>
        </div>
    `;
}

	
	$.ajax({
  url: 'proxy.php', // Remplacer par le chemin vers votre script proxy PHP
  type: 'GET',
  data: { channel: 'unibotscanner' }, // Remplacez 'yourchannelname' par le nom du canal réel
  success: function(data) {
    // Traitez les données reçues ici
    console.log("Réponse obtenue: ", data);
    var doc = parseHTML(data);
    console.log("Document parsé: ", doc);
    displayItems(doc);
  },
  error: function() {
    alert('Impossible de récupérer les données.');
  }
});

	
	
</script>

</body>
</html>
