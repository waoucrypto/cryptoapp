
<!--
BOT SEARCH
-->
<div class="bot_bottom">
<div class="bot_search">
<form>
<div class="bot_search_menu" style="display:none;">
<ul>
<li><a id="buy"><span>/snipe</span><span>Buy, Sell or Snipe cryptos</span></a></li>
<li><a id="trending"><span>/trending</span><span>Listing of the trending cryptos</span></a></li>
<li><a id="latest"><span>/latest</span><span>Listing of the new cryptos</span></a></li>
<li><a id="profit"><span>/profit</span><span>Show your profit on a token</span></a></li>
<li><a id="portfolio"><span>/portfolio</span><span>Show your current trades</span></a></li>
<li><a id="performance"><span>/performance</span><span>Show your performance</span></a></li>
<li><a id="wallet"><span>/wallet</span><span>Add your wallet metamask</span></a></li>
<li><a id="token" style="display:none;"><span>/token</span><span>Write a token</span></a></li>
</ul>
</div>
<div class="bot_search_input">
<input type="text" placeholder="/ or Token" id="searchInput" autocomplete="off">
<i class="fa-solid fa-arrow-up"></i>
<input type="submit" value="">
</div>
</form>
</div>
</div>

<!--
BOT EMPTY
-->
<div class="bot_empty">
<div class="bot_empty0">
<div class="bot_empty1">
<span><img src="/storm/images/logo-color.svg"></span>
<b>Best crypto bot</b>
</div>
<div class="bot_empty2">
<ul>
<li><a id="buy"><span>Snipe</span><span>Buy, Sell or Snipe cryptos</span></a></li>
<li><a id="wallet"><span>Wallet</span><span>Add your wallet metamask</span></a></li>
<li><a id="trending"><span>Trending</span><span>Listing of the trending cryptos</span></a></li>
<li><a id="latest"><span>Latest</span><span>Listing of the new cryptos</span></a></li>
</ul>
</div>
</div>
</div>

<!--
BOT CENTER
-->
<div class="bot_center">
<div class="bot_center2">
<div class="bot_you" style="display:none">
<div class="bot_you_user">
<span><img src="/storm/images/avatar.jpg"></span>
<b>You</b>
</div>
<div class="bot_you_message">
</div>
</div>
<div class="bot_storm" style="display:none">
<div class="bot_storm_user">
<span><img src="/storm/images/logo-white.svg"></span>
<b>Storm</b>
</div>
<div class="bot_storm_message">
</div>
</div>
</div>
</div>


<script>
$(document).ready(function() {
    var currentSelectionIndex = -1; // Index pour suivre l'élément actuellement sélectionné

    $('#searchInput').on('input', function(e) {
        var inputVal = $(this).val().trim();

        // Réinitialiser la sélection chaque fois qu'il y a une nouvelle entrée
        currentSelectionIndex = -1;
        $('.bot_search_menu ul li').removeClass('selected');

        // Affiche ou cache le menu selon la saisie
        if(inputVal.startsWith("/")) {
            $('.bot_search_menu').show();
            filterMenuItems(inputVal.substring(1).toLowerCase());
        } else {
            $('.bot_search_menu').hide();
        }
    });

    function filterMenuItems(searchStr) {
        if(searchStr === "") {
            $('.bot_search_menu ul li').show();
        } else {
            $('.bot_search_menu ul li').hide().filter(function() {
                return $(this).text().trim().toLowerCase().includes(searchStr);
            }).show();
        }
    }

$('#searchInput').on('keydown', function(e) {
    var $listItems = $('.bot_search_menu ul li:visible');
    var max = $listItems.length;

    console.log(e.key); // Pour voir quelle touche est pressée

    if ($('.bot_search_menu').css('display') !== 'none') {
        if (e.key === 'ArrowDown') {
            e.preventDefault();
            navigateMenu('down', $listItems, max);
        } else if (e.key === 'ArrowUp') {
            e.preventDefault();
            navigateMenu('up', $listItems, max);
        } else if (e.key === 'Enter') {
            e.preventDefault();
            console.log('Entrée pressée'); // Pour vérifier que la touche Entrée est détectée
            var $selectedItem = $('.bot_search_menu ul li.selected a');
            console.log($selectedItem); // Pour vérifier quel élément est sélectionné
            if ($selectedItem.length > 0) {$selectedItem.trigger('click');} // Simuler un clic
        }
    }
});


    function navigateMenu(direction, $listItems, max) {
        if(direction === 'down') {
            if (currentSelectionIndex < max - 1) {
                currentSelectionIndex++;
            } else {
                currentSelectionIndex = 0; // Retour au début si on est à la fin
            }
        } else if (direction === 'up') {
            if (currentSelectionIndex > 0) {
                currentSelectionIndex--;
            } else {
                currentSelectionIndex = max - 1; // Aller à la fin si on est au début
            }
        }
        $listItems.removeClass('selected'); // Enlever la classe 'selected' de tous les éléments
        $listItems.eq(currentSelectionIndex).addClass('selected'); // Ajouter la classe 'selected' à l'élément actuel
    }

    // Ferme le menu si un clic en dehors de celui-ci est détecté
    $(document).on('click', function(e) {
        var $menu = $('.bot_search_menu');
        // Si le clic a lieu en dehors du menu et qu'il n'est pas sur l'input de recherche
        if (!$menu.is(e.target) && !$menu.has(e.target).length && !$('#searchInput').is(e.target)) {
            $menu.hide();
            $('#searchInput').val(''); // Optionnel : réinitialiser le champ de recherche
            $('.bot_search_menu ul li').removeClass('selected'); // Enlève la classe 'selected'
            currentSelectionIndex = -1; // Réinitialiser l'index de sélection
        }
    });

});
	
	
$(document).ready(function() {
    // Fonction pour gérer les clics communs à tous les éléments
    function handleMenuClick(selector, loadFile) {
        $(selector).on('click', function(e) {
            e.preventDefault();
            var menuItem = $(this).find('span:first').text();
            $('#searchInput').val('');
            $('.bot_you, .bot_storm').css('display', 'flex');
            $('.bot_search_menu').css('display', 'none');
            $('.bot_you_message').text(menuItem);
            $('.bot_storm_message').load(loadFile);
        });
    }

// Fonction pour gérer les clics communs à tous les éléments
function handleMenuClick(selector, loadFile) {
    $(selector).on('click', function(e) {
        e.preventDefault();
        var menuItem = $(this).find('span:first').text();
        $('#searchInput').val('');

        // Cloner les divs .bot_you et .bot_storm et les préparer pour le nouveau contenu
        var newYou = $('.bot_you').first().clone(true).css('display', 'flex');
        var newStorm = $('.bot_storm').first().clone(true).css('display', 'flex');

        // Ajouter le texte du menu à la nouvelle div .bot_you_message
        newYou.find('.bot_you_message').text(menuItem);

        // Utiliser $.get() pour récupérer le contenu, et l'ajouter à la nouvelle div .bot_storm_message
        $.get(loadFile, function(data) {
            newStorm.find('.bot_storm_message').html(data);
            // Insérer les nouvelles divs dans le DOM, par exemple à la fin du container
            $('.bot_center2').append(newYou).append(newStorm);

            // Fermer le menu après l'ajout des divs
            $('.bot_search_menu, .bot_empty').hide();

            // Laisser un bref moment pour que le DOM se mette à jour
            setTimeout(function() {
                // Calculer la position de défilement en fonction de la position du nouvel élément
                var offsetTop = newYou.offset().top - $('.bot_center').offset().top;
                var scrollAmount = $('.bot_center').scrollTop() + offsetTop - 100; // Décalage supplémentaire pour ajustement
                
                // Faire défiler jusqu'au dernier .bot_you ajouté à l'intérieur de .bot_center
                $('.bot_center').animate({
                    scrollTop: scrollAmount
                }, 500); // Durée réduite pour le défilement
            }, 100);
        });
    });
}
	
    // Tableau de configuration pour chaque élément
    var menuItems = [
        { selector: '#latest', loadFile: '_dash_latest.php' },
        { selector: '#trending', loadFile: '_dash_trending.php' },
        { selector: '#buy', loadFile: '_bot_enter.php' },
        { selector: '#profit', loadFile: '_dash_profit.php' },
        { selector: '#portfolio', loadFile: '_dash_portfolio.php' },
        { selector: '#performance', loadFile: '_dash_performance.php' },
        { selector: '#wallet', loadFile: '_dash_wallet.php' }, 
        { selector: '#token', loadFile: '_bot_token.php' },
		{ selector: '.bot_empty #buy', loadFile: '_bot_snipe.php' },
		{ selector: '.bot_empty #trending', loadFile: '_dash_trending.php' },
		{ selector: '.bot_empty #latest', loadFile: '_dash_latest.php' },
		{ selector: '.bot_empty #wallet', loadFile: '_dash_wallet.php' },
		{ selector: '.search_bloc ul li#token', loadFile: '_bot_token.php' },
		{ selector: '.dash_latest ul li#token', loadFile: '_bot_token.php' },
    ];

	// Initialisation des gestionnaires d'événements
menuItems.forEach(function(item) {
    handleMenuClick(item.selector, item.loadFile);
});
	
	
	
$('#searchInput').on('keydown', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault(); // Empêche le formulaire de se soumettre

        var inputVal = $(this).val().trim();
        var isERC20Token = /^0x[a-fA-F0-9]{40}$/.test(inputVal);

        if (isERC20Token) {
            // Créez de nouveaux éléments clonés pour .bot_you et .bot_storm
			$('.bot_empty').css('display', 'none');
            var newYou = $('.bot_you').first().clone(true).css('display', 'flex');
            newYou.find('.bot_you_message').text(inputVal);
            var newStorm = $('.bot_storm').first().clone(true).css('display', 'flex');

            // Ajoutez les nouveaux éléments clonés au DOM
            $('.bot_center2').append(newYou);
            $('.bot_center2').append(newStorm);

            // Chargez le contenu de _bot_token.php dans le nouvel élément .bot_storm_message
            newStorm.find('.bot_storm_message').load('_bot_token.php', function(response, status, xhr) {
                if (status == "error") {
                    console.log("Erreur lors du chargement de _bot_token.php: " + xhr.status + " " + xhr.statusText);
                } else {
                    // Laisser un bref moment pour que le DOM se mette à jour
                    setTimeout(function() {
                        // Calculer la nouvelle position de défilement ici
                        var newYouPosition = newYou.offset().top - $('.bot_center').offset().top;
                        var scrollAmount = $('.bot_center').scrollTop() + newYouPosition - 100;

                        // Faites défiler jusqu'au nouvel élément
                        $('.bot_center').animate({
                            scrollTop: scrollAmount
                        }, 500);
                    }, 100); // Laissez un bref délai pour que le contenu soit rendu
                }
            });

            // Stockez le token en utilisant jQuery .data() sur le nouvel élément .bot_you
            newYou.data('token', inputVal);

            // Exécutez immédiatement la logique de gestion du token
            // Récupérez le token stocké avec jQuery .data() depuis le nouvel élément .bot_you
            var token = newYou.data('token');
            console.log(token); // Affichez le token pour le débogage

            // Vider le champ de saisie après avoir traité le token
            $('#searchInput').val('');
        } else {
            // Gérez ici le cas où la valeur saisie n'est pas un token ERC-20
            $('#searchInput').val(''); // Vider le champ de saisie si la valeur n'est pas un token ERC-20
        }
    }
});


    // Gestionnaire de clic pour l'élément #token
    $('#token').on('click', function(e) {
        e.preventDefault();
        // Récupérez le token stocké et effectuez les actions nécessaires
        var token = $(this).data('token'); // Récupérez le token stocké avec jQuery .data()
        // Insérez ici la logique qui utilise le token
    });
	
	
});
</script>