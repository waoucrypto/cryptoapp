
<!--
BOT SEARCH
-->
<div class="bot_bottom">
<div class="bot_search">
<form>
<div class="bot_search_menu" style="display:none;">
<ul>
<li><a id="searchh"><span>/search</span><span>Search a crypto</span></a></li>
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
<i class="faslash" id="openbot-search_menu">/</i>
<input type="text" placeholder="Token" id="searchInput" autocomplete="off">
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
<span>
<svg version="1.1" id="a" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 560.2 560" style="enable-background:new 0 0 560.2 560;" xml:space="preserve">
<g>
	<path class="st0" d="M152.1,43c29.2,0,56.6,11.4,77.2,32l256.9,256.9c20.6,20.6,32,48.1,32,77.2c0,29.2-11.4,56.6-32,77.2
		c-20.6,20.6-48.1,32-77.2,32c-29.2,0-56.6-11.4-77.2-32L74.9,229.4c-20.6-20.6-32-48.1-32-77.2c0-29.2,11.4-56.6,32-77.2
		C95.5,54.4,122.9,43,152.1,43 M152.1,3C113.9,3,75.7,17.6,46.6,46.7l0,0c-58.3,58.3-58.3,152.7,0,211l256.9,256.9
		c29.1,29.1,67.3,43.7,105.5,43.7s76.4-14.6,105.5-43.7l0,0c58.3-58.3,58.3-152.7,0-211L257.6,46.7C228.5,17.6,190.3,3,152.1,3
		L152.1,3z"/>
</g>
<g>
	<path class="st0" d="M409,43c29.2,0,56.6,11.4,77.2,32c20.6,20.6,32,48.1,32,77.2c0,29.2-11.4,56.6-32,77.2L229.3,486.3
		c-20.6,20.6-48.1,32-77.2,32s-56.6-11.4-77.2-32c-20.6-20.6-32-48.1-32-77.2c0-29.2,11.4-56.6,32-77.2L331.8,75
		C352.4,54.4,379.8,43,409,43 M409,3c-38.2,0-76.4,14.6-105.5,43.7L46.6,303.6c-58.3,58.3-58.3,152.7,0,211l0,0
		c29.1,29.1,67.3,43.7,105.5,43.7s76.4-14.6,105.5-43.7l256.9-256.9c58.3-58.3,58.3-152.7,0-211l0,0C485.3,17.6,447.2,3,409,3L409,3
		z"/>
</g>
</svg>
</span>
<b>Best crypto bot</b>
</div>
<div class="bot_empty2">
<ul>
<!--
<li><a id="buy"><span>Snipe</span><span>Buy, Sell or Snipe cryptos</span></a></li>
<li><a id="wallet"><span>Wallet</span><span>Add your wallet metamask</span></a></li>
<li><a id="trending"><span>Trending</span><span>Listing of the trending cryptos</span></a></li>
<li><a id="latest"><span>Latest</span><span>Listing of the new cryptos</span></a></li>
-->
<li><a id="searchh"><span>/search</span><span>Search a crypto</span></a></li>
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
</div>
</div>

<!--
BOT CENTER
-->
<div class="bot_center">
<div class="bot_center2">
<div class="bot_you" style="display:none">
<div class="bot_you_user">
<span><i class="fa-solid fa-user"></i></span>
<b>You</b>
</div>
<div class="bot_you_message">
</div>
</div>
<div class="bot_storm" style="display:none">
<div class="bot_storm_user">
<span><img src="/images/logo-white.svg"></span>
<b>Storm</b>
</div>
<div class="bot_storm_message">
</div>
</div>
</div>
</div>


<script>
$(document).ready(function() {
    var currentSelectionIndex = -1;

	$('#openbot-search_menu').on('click', function() {
		setTimeout(function() {
			$('#searchInput').val('/').trigger('input').focus();
		}, 0);
	});
	
    $('#searchInput').on('input', function(e) {
        var inputVal = $(this).val().trim();
        currentSelectionIndex = -1;
        $('.bot_search_menu ul li').removeClass('selected');

        if(inputVal.startsWith("/")) {
            $('.bot_search_menu').show();
            filterMenuItems(inputVal.substring(1).toLowerCase());
        } else {
            $('.bot_search_menu').hide();
        }
    });

    function filterMenuItems(searchStr) {
        $('.bot_search_menu ul li').toggle(searchStr === "").filter(function() {
            return $(this).text().trim().toLowerCase().includes(searchStr);
        }).show();
    }

    $('#searchInput').on('keydown', function(e) {
        var $listItems = $('.bot_search_menu ul li:visible');
        var max = $listItems.length;

        if ($('.bot_search_menu').is(':visible')) {
            switch (e.key) {
                case 'ArrowDown':
                case 'ArrowUp':
                    e.preventDefault();
                    navigateMenu(e.key === 'ArrowDown' ? 'down' : 'up', $listItems, max);
                    break;
                case 'Enter':
                    e.preventDefault();
                    var $selectedItem = $('.bot_search_menu ul li.selected a');
                    if ($selectedItem.length) $selectedItem.trigger('click');
                    break;
            }
        }
    });

    function navigateMenu(direction, $listItems, max) {
        currentSelectionIndex = (direction === 'down') ? 
            (currentSelectionIndex < max - 1 ? currentSelectionIndex + 1 : 0) : 
            (currentSelectionIndex > 0 ? currentSelectionIndex - 1 : max - 1);

        $listItems.removeClass('selected').eq(currentSelectionIndex).addClass('selected');
    }

    $(document).on('click', function(e) {
        var $menu = $('.bot_search_menu');
        if (!$menu.is(e.target) && !$menu.has(e.target).length && !$('#searchInput').is(e.target)) {
            $menu.hide();
            $('#searchInput').val('');
            $('.bot_search_menu ul li').removeClass('selected');
            currentSelectionIndex = -1;
        }
    });

	function handleMenuClick(selector, loadFile) {
		$(document).on('click', selector, function(e) {
			e.preventDefault();
			var menuItem = $(this).find('span:first').text();
			$('#searchInput').val('');
			var newYou = $('.bot_you').first().clone(true).css('display', 'flex');
			var newStorm = $('.bot_storm').first().clone(true).css('display', 'flex');
			newYou.find('.bot_you_message').text(menuItem);
			$('.bot_center2').append(newYou, newStorm);
			$('.bot_search_menu, .bot_empty').hide();
			scrollToNewElement(newYou);
			loadContentWithLoader(newStorm, loadFile);
			if (loadFile === 'bot-search.php') {
				loadContentWithLoader(newStorm, 'bot-search.php', null, '.search_bloc input[type="text"]');
			} else {
				loadContentWithLoader(newStorm, loadFile);
			}
		});
	}

    var menuItems = [

        { selector: '.bot_search #latest', loadFile: 'bot-latest.php' },
        { selector: '.bot_search #trending', loadFile: 'bot-trending.php' },
        { selector: '.bot_search #buy', loadFile: 'bot-snipe.php' },
        { selector: '.bot_search #profit', loadFile: 'bot-profit.php' },
        { selector: '.bot_search #portfolio', loadFile: 'bot-portfolio.php' },
        { selector: '.bot_search #performance', loadFile: 'bot-performance.php' },
        { selector: '.bot_search #wallet', loadFile: 'bot-wallet.php' }, 
        { selector: '.bot_search #token', loadFile: 'bot-buy.php' },

		{ selector: '.bot_empty #searchh', loadFile: 'bot-search.php' },
		{ selector: '.bot_empty #buy', loadFile: 'bot-snipe.php' },
		{ selector: '.bot_empty #trending', loadFile: 'bot-trending.php' },
		{ selector: '.bot_empty #latest', loadFile: 'bot-latest.php' },
		{ selector: '.bot_empty #wallet', loadFile: 'bot-wallet.php' },
		{ selector: '.bot_empty #profit', loadFile: 'bot-profit.php' },
		{ selector: '.bot_empty #performance', loadFile: 'bot-performance.php' },
		{ selector: '.bot_empty #portfolio', loadFile: 'bot-portfolio.php' },

		{ selector: '.search_bloc ul li#token', loadFile: 'bot-buy.php' },
		{ selector: '.dash_latest ul li#token', loadFile: 'bot-buy.php' },
		{ selector: '.bot_side_center ul li a#token', loadFile: 'bot-buy.php' },
		{ selector: '.bot_search a#searchh', loadFile: 'bot-search.php' },
		{ selector: '.bot .bot_message a#searchh', loadFile: 'bot-search.php' },
    ];

    menuItems.forEach(function(item) {
        handleMenuClick(item.selector, item.loadFile);
    });

    $('#searchInput').on('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            var inputVal = $(this).val().trim();
            var isERC20Token = /^0x[a-fA-F0-9]{40}$/.test(inputVal);

            if (isERC20Token) {
                handleTokenInput(inputVal);
            } else {
                $('#searchInput').val('');
            }
        }
    });

    function handleTokenInput(token) {
        var newYou = $('.bot_you').first().clone(true).css('display', 'flex');
        newYou.find('.bot_you_message').text(token);
        var newStorm = $('.bot_storm').first().clone(true).css('display', 'flex');
        $('.bot_center2').append(newYou, newStorm);
        $('.bot_empty').hide();
        scrollToNewElement(newYou);
        newYou.data('token', token);
    	$('#searchInput').val('');
		loadContentWithLoader(newStorm, 'bot-buy.php');
    }

    function handleTokenInput(token) {
        var newYou = $('.bot_you').first().clone(true).css('display', 'flex');
        newYou.find('.bot_you_message').text(token);
        var newStorm = $('.bot_storm').first().clone(true).css('display', 'flex');
        $('.bot_center2').append(newYou, newStorm);
        $('.bot_empty').hide();
        scrollToNewElement(newYou);
        newYou.data('token', token);
    	$('#searchInput').val('');
		loadContentWithLoader(newStorm, 'bot-buy.php');
    }

    function scrollToNewElement(newElement) {
        setTimeout(function() {
            var offsetTop = newElement.offset().top - $('.bot_center').offset().top;
            var scrollAmount = $('.bot_center').scrollTop() + offsetTop - 100;
            $('.bot_center').animate({ scrollTop: scrollAmount }, 400);
        }, 100);
    }
	
	function anchorAfterLoading(newElement) {
		var offsetTop = newElement.offset().top - $('.bot_center').offset().top;
		var scrollAmount = $('.bot_center').scrollTop() + offsetTop - 150;
		$('.bot_center').animate({ scrollTop: scrollAmount }, 400);
	}

	function loadContentWithLoader(newStorm, loadFile, callback, focusSelector) {
		newStorm.find('.bot_storm_message').html('<span class="loader1"><span class="loader2"></span></span>');
		setTimeout(function() {
			newStorm.find('.bot_storm_message').load(loadFile, function() {
				anchorAfterLoading(newStorm);
				if (loadFile === 'bot-buy.php') {
					setTimeout(function() {
						reloadTradingViewWidget("<?php echo $themeClass; ?>");
					}, 100);
				}
				if (typeof callback === 'function') {
					callback();
				}
				// Mettre le focus si focusSelector est défini
				if (focusSelector) {
					$(focusSelector).focus();
				}
			});
		}, 1000);
	}

	
});
	
</script>