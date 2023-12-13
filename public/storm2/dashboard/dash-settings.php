


<meta charset="utf-8">


<div class="settings_bloc">
<div class="settings_bloc_title">Settings <i class="fa-solid fa-xmark" onClick="settings_close()"></i></div>

<div class="settings_bloc2">


<!--
WALLET
-->
<div class="dash_wallet">


<!--
WALLET
-->
<div class="dash_wallet1" id="dash_wallet1">

<ul>
<li><b>General</b></li>
<li id="settings_menu_preference" class="on"><a onClick="wallet_preference()"><i class="fa-solid fa-gears"></i> Preference</a></li>
</ul>

<ul>
<li><b>Wallets</b></li>
<li id="settings_menu_wallet_create"><a onClick="wallet_create()"><i class="fa-solid fa-plus"></i> Create Wallet</a></li>
<li id="settings_menu_wallet_import"><a onClick="wallet_import()"><i class="fa-solid fa-upload"></i> Import Wallet</a></li>
<li id="settings_menu_wallet_my"><a onClick="wallet_my()"><i class="fa-solid fa-wallet"></i> My Wallets</a></li>
</ul>

<ul>
<li><b>Settings</b></li>
<li id="settings_menu_settings_buy"><a onClick="settings_buy()"><i class="fa-solid fa-coins"></i> Buy</a></li>
<li id="settings_menu_settings_sell"><a onClick="settings_sell()"><i class="fa-solid fa-sack-dollar"></i> Sell</a></li>
<li id="settings_menu_settings_snipe"><a onClick="settings_snipe()"><i class="fa-solid fa-rocket"></i> Snipe</a></li>
<li id="settings_menu_settings_gas"><a onClick="settings_gas()"><i class="fa-solid fa-gas-pump"></i> Gas</a></a></li>
<li id="settings_menu_settings_toggle"><a onClick="settings_toggle()"><i class="fa-solid fa-sliders"></i> Toggle</a></li>
<li id="settings_menu_settings_safety"><a onClick="settings_safety()"><i class="fa-solid fa-lock"></i> Safety</a></li>
</ul>

</div>


<!--
SETTINGS
-->
<div class="dash_wallet2">


<!--
WALLET CREATE
-->
<div class="dash_settings" id="wallet_preference" style="display:flex;overflow:visible;">
<form>
<div class="dash_preference">
<div>
<b>Theme</b>
<b><span onClick="dash_preference_theme()">Dark <i class="fa-solid fa-angle-down"></i></span>
<ul id="dash_preference_theme">
<li><a>Dark</a></li>
<li><a>Light</a></li>
</ul>
</b>
</div>
<div>
<b>Locale</b>
<b><span onClick="dash_preference_locale()">en-EN <i class="fa-solid fa-angle-down"></i></span>
<ul id="dash_preference_locale">
<li><a>Auto-detect</a></li>
<li><a>de-DE</a></li>
<li><a>en-EN</a></li>
<li><a>es-ES</a></li>
<li><a>fr-FR</a></li>
<li><a>it-IT</a></li>
<li><a>ja-JA</a></li>
<li><a>pt-BR</a></li>
<li><a>tr-TR</a></li>
<li><a>uk-UK</a></li>
<li><a>zh-CN</a></li>
<li><a>zh-TW</a></li>
</ul>
</b>
</div>
<div>
<b>Wallets</b>
<u><a onClick="wallet_create()">Create Wallet</a></u>
</div>
</div>
</form>
</div>


<!--
WALLET CREATE
-->
<div class="dash_settings" id="wallet_create">
<form>
<div class="dash_settings_title">Create Your Wallet</div>
<ul class="dash_settings_ul">
<li><label>Name</label><div><input type="text" placeholder="Wallet 1" class="wlarge"><input type="submit" value="Save" onClick="wallet_create2(event)"></div></li>
</ul>
</form>
</div>
<div class="dash_settings" id="wallet_create2">
<form>
<div class="dash_settings_title">Successfully Created Wallet</div>
<li class="dash_settings_confirmation">
<p>Save your private key. <br><br>If you delete this message, we will not show your private key again.
<em>0x4b8e8b3f634fba1c5ed20f03e8c5a8b305d8e3a2f1b3c4d5e6f60718293a4b5c <i class="fa-regular fa-copy"></i></em>
</p>
</li>
</form>
</div>


<!--
WALLET IMPORT
-->
<div class="dash_settings" id="wallet_import">
<form>
<div class="dash_settings_title">Import Your Wallet</div>
<ul class="dash_settings_ul">
<li><label>Name</label><div><input type="text" placeholder="Wallet 1" class="wlarge"><input type="submit" value="Save" onClick="wallet_import2(event)"></div></li>
</ul>
</form>
</div>
<div class="dash_settings" id="wallet_import2" style="overflow:visible">
<form>
<div class="dash_settings_title"> Import your private key</div>
<ul class="dash_settings_ul">
<li><label>Paste</label><div><input type="text" placeholder="0X000...0000" class="wxlarge"><input type="submit" value="Save" onClick="wallet_import3(event)"></div></li>
<li class="w100b">
<div class="wallet_import2_img">Step 1<img src="/images/privatekey1.gif"></div>
<div class="wallet_import2_img">Step 2<img src="/images/privatekey2.gif"></div>
<div class="wallet_import2_img">Step 3<img src="/images/privatekey3.gif"></div>
</li>
</ul>
</form>
</div>
<div class="dash_settings" id="wallet_import3">
<form>
<div class="dash_settings_title">Successfully Created Wallet</div>
<li class="dash_settings_confirmation"><p>Done. Congrats.</p></li>
</form>
</div>


<!--
WALLET MY
-->
<div class="dash_settings" id="wallet_my">
<form>
<li class="dash_settings_wallets">
<div><u><i class="fa-solid fa-pen-to-square"></i> Wallet 1: 3 ETH</u><u><i class="fa-regular fa-circle-xmark"></i></u></div>
<div>0x4b8e8b3f634e3a2f1b3c4d5e6f60718293a4b7h</div>
<div><a class="on">Default<i class="fa-solid fa-check"></i></a><a>Sniper<i class="fa-solid fa-check"></i></a><a>Manual<i class="fa-solid fa-check"></i></a></div>
</li>
</form>
</div>


<!--
BUY
-->
<div class="dash_settings" id="settings_buy">
<form>
<ul class="dash_settings_ul">
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Buy GWEI</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Approve GWEI </label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Sell GWEI</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Anti-Rug GWEI</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Buy Tax Limit</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Sell Tax Limit</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Min Liquidity Limit</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Max Liquidity Limit</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
</ul>
</form>
</div>


<!--
SELL
-->
<div class="dash_settings" id="settings_sell">
<form>
<ul class="dash_settings_ul">
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Max Sell Tax</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Sell GWEI</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Sell Rug GWEI</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Min Liquidity Value</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
</ul>
</form>
</div>


<!--
SNIPE
-->
<div class="dash_settings" id="settings_snipe">
<form>
<ul class="dash_settings_ul">
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Snipe Amount</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Snipe Tip</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Backup Tip</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Approve GWEI</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Sell GWEI</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Anti-Rug GWEI</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Buy Tax Limit</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Sell Tax Limit</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Min Liquidity Limit</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Max Liquidity Limit</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
</ul>
</form>
</div>


<!--
GAS
-->
<div class="dash_settings" id="settings_gas">
<form>
<ul class="dash_settings_ul">
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Auto Snipe Tip</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>First Bundle Backup Tip</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Buy GWEI</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Approve GWEI</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Sell GWEI</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Anti-Rug GWEI</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
</ul>
</form>
</div>


<!--
TOGGLE
-->
<div class="dash_settings" id="settings_toggle">
<form>
<ul class="dash_settings_ul">
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Anti-Rug</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>First Bundle or Fail</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>First Bundle Backup</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Transfer on Blacklist</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>MaxTx or Revert</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
</ul>
</form>
</div>


<!--
SAFETY
-->
<div class="dash_settings" id="settings_safety">
<form>
<ul class="dash_settings_ul">
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Buy Tax Limit</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Sell Tax Limit</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Slippage</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Min Liquidity Limit</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
<li><label><div><i class="fa-solid fa-circle-info"></i><span>Explication</span></div>Max Liquidity Limit</label><div><input type="text" placeholder="0.01 ETH"><input type="submit" value="Save"></div></li>
</ul>
</form>
</div>


</div>
</div>

</div>

<script>


function dash_preference_theme(){
$('#dash_preference_theme').css('display', 'flex');
}

function dash_preference_locale(){
$('#dash_preference_locale').css('display', 'flex');
}
	
$(document).mouseup(function(e) {
    var containerTheme = $("#dash_preference_theme");
    var containerLocale = $("#dash_preference_locale");

    // Si le clic se fait en dehors de dash_preference_theme, il se ferme
    if (!containerTheme.is(e.target) && containerTheme.has(e.target).length === 0) {
        containerTheme.hide();
    }

    // Si le clic se fait en dehors de dash_preference_locale, il se ferme
    if (!containerLocale.is(e.target) && containerLocale.has(e.target).length === 0) {
        containerLocale.hide();
    }
});


function submitno(event) {event.preventDefault();}

function closeAllGas() {
$('#gas1').hide();
$('#gas2').hide();
$('#gas3').hide();
$('#gas4').hide();
$('#gas5').hide();
$('#gas6').hide();
}
function closeAllToggle() {
$('#toggle1').hide();
$('#toggle2').hide();
$('#toggle3').hide();
$('#toggle4').hide();
$('#toggle5').hide();
}
function closeAllSafety() {
$('#safety1').hide();
$('#safety2').hide();
$('#safety3').hide();
$('#safety4').hide();
$('#safety5').hide();
}
function closeAllBuy() {
$('#buy1').hide();
$('#buy2').hide();
$('#buy3').hide();
$('#buy4').hide();
$('#buy5').hide();
$('#buy6').hide();
$('#buy7').hide();
$('#buy8').hide();
}
function closeAllSell() {
$('#sell1').hide();
$('#sell2').hide();
$('#sell3').hide();
$('#sell4').hide();
}
function closeAllSnipe() {
$('#snipe1').hide();
$('#snipe2').hide();
$('#snipe3').hide();
$('#snipe4').hide();
$('#snipe5').hide();
$('#snipe6').hide();
$('#snipe7').hide();
$('#snipe8').hide();
$('#snipe9').hide();
$('#snipe10').hide();
}

function wallet_preference(){
$('.dash_settings').css('display', 'none');
$('#wallet_preference').css('display', 'flex');
$('.dash_wallet1 li').removeClass('on');
$('#settings_menu_preference').addClass('on');
$('#wallet_preference form li:nth-child(1) input[type=text]').focus();
}

function wallet_create(){
$('.dash_settings').css('display', 'none');
$('#wallet_create').css('display', 'flex');
$('.dash_wallet1 li').removeClass('on');
$('#settings_menu_wallet_create').addClass('on');
$('#wallet_create form li:nth-child(1) input[type=text]').focus();
}
	
function wallet_import(){
$('.dash_settings').css('display', 'none');
$('#wallet_import').css('display', 'flex');
$('.dash_wallet1 li').removeClass('on');
$('#settings_menu_wallet_import').addClass('on');
$('#wallet_import form li:nth-child(1) input[type=text]').focus();
}
	
function wallet_my(){
$('.dash_settings').css('display', 'none');
$('#wallet_my').css('display', 'flex');
$('.dash_wallet1 li').removeClass('on');
$('#settings_menu_wallet_my').addClass('on');
}

function wallet_create2(){
submitno(event);
$('.dash_settings').css('display', 'none');
$('#wallet_create2').css('display', 'flex');
$('#wallet_create').css('display', 'none');
}
	
function wallet_import2(){
submitno(event);
$('.dash_settings').css('display', 'none');
$('#wallet_import2').css('display', 'flex');
$('#wallet_import').css('display', 'none');
$('#wallet_import2 form li:nth-child(1) input[type=text]').focus();
}
	
function wallet_import3(){
submitno(event);
$('.dash_settings').css('display', 'none');
$('#wallet_import3').css('display', 'flex');
$('#wallet_import2').css('display', 'none');
}

function dash_settings_close(){
$('.dash_wallet1').css('display', 'flex');
$('.dash_settings').css('display', 'none');
}

function settings_gas(){
$('.dash_settings').css('display', 'none');
$('#settings_gas').css('display', 'flex');
$('.dash_wallet1 li').removeClass('on');
$('#settings_menu_settings_gas').addClass('on');
closeAllGas();
$('#gas1').show();
}

function settings_toggle(){
$('.dash_settings').css('display', 'none');
$('#settings_toggle').css('display', 'flex');
$('.dash_wallet1 li').removeClass('on');
$('#settings_menu_settings_toggle').addClass('on');
closeAllToggle();
$('#toggle1').show();
}

function settings_safety(){
$('.dash_settings').css('display', 'none');
$('#settings_safety').css('display', 'flex');
$('.dash_wallet1 li').removeClass('on');
$('#settings_menu_settings_safety').addClass('on');
closeAllSafety();
$('#safety1').show();
}

function settings_buy(){
$('.dash_settings').css('display', 'none');
$('#settings_buy').css('display', 'flex');
$('.dash_wallet1 li').removeClass('on');
$('#settings_menu_settings_buy').addClass('on');
closeAllBuy();
$('#buy1').show();
}

function settings_sell(){
$('.dash_settings').css('display', 'none');
$('#settings_sell').css('display', 'flex');
$('.dash_wallet1 li').removeClass('on');
$('#settings_menu_settings_sell').addClass('on');
closeAllSell();
$('#sell1').show();
}

function settings_snipe(){
$('.dash_settings').css('display', 'none');
$('#settings_snipe').css('display', 'flex');
$('.dash_wallet1 li').removeClass('on');
$('#settings_menu_settings_snipe').addClass('on');
closeAllSnipe();
$('#snipe1').show();
}

function gas1(){closeAllGas();$('#gas1').toggle();}
function gas2(){closeAllGas();$('#gas2').toggle();}
function gas3(){closeAllGas();$('#gas3').toggle();}
function gas4(){closeAllGas();$('#gas4').toggle();}
function gas5(){closeAllGas();$('#gas5').toggle();}
function gas6(){closeAllGas();$('#gas6').toggle();}
	
function toggle1(){closeAllToggle();$('#toggle1').toggle();}
function toggle2(){closeAllToggle();$('#toggle2').toggle();}
function toggle3(){closeAllToggle();$('#toggle3').toggle();}
function toggle4(){closeAllToggle();$('#toggle4').toggle();}
function toggle5(){closeAllToggle();$('#toggle5').toggle();}

function safety1(){closeAllSafety();$('#safety1').toggle();}
function safety2(){closeAllSafety();$('#safety2').toggle();}
function safety3(){closeAllSafety();$('#safety3').toggle();}
function safety4(){closeAllSafety();$('#safety4').toggle();}
function safety5(){closeAllSafety();$('#safety5').toggle();}
	
function buy1(){closeAllBuy();$('#buy1').toggle();}
function buy2(){closeAllBuy();$('#buy2').toggle();}
function buy3(){closeAllBuy();$('#buy3').toggle();}
function buy4(){closeAllBuy();$('#buy4').toggle();}
function buy5(){closeAllBuy();$('#buy5').toggle();}
function buy6(){closeAllBuy();$('#buy6').toggle();}
function buy7(){closeAllBuy();$('#buy7').toggle();}
function buy8(){closeAllBuy();$('#buy8').toggle();}

function sell1(){closeAllSell();$('#sell1').toggle();}
function sell2(){closeAllSell();$('#sell2').toggle();}
function sell3(){closeAllSell();$('#sell3').toggle();}
function sell4(){closeAllSell();$('#sell4').toggle();}

function snipe1(){closeAllSnipe();$('#snipe1').toggle();}
function snipe2(){closeAllSnipe();$('#snipe2').toggle();}
function snipe3(){closeAllSnipe();$('#snipe3').toggle();}
function snipe4(){closeAllSnipe();$('#snipe4').toggle();}
function snipe5(){closeAllSnipe();$('#snipe5').toggle();}
function snipe6(){closeAllSnipe();$('#snipe6').toggle();}
function snipe7(){closeAllSnipe();$('#snipe7').toggle();}
function snipe8(){closeAllSnipe();$('#snipe8').toggle();}
function snipe9(){closeAllSnipe();$('#snipe9').toggle();}
function snipe10(){closeAllSnipe();$('#snipe10').toggle();}
</script>




</div>

<script>
function settings_open(){
$('.settings').css('display', 'flex');
$('.settings_background').animate({opacity: '1'}, 200);
$('.settings .settings_bloc').animate({marginTop: '0'}, 100);

}
function settings_close(){
$('.settings').css('display', 'none');
$('.settings_background').animate({opacity: '0'}, 0);
$('.settings .settings_bloc').animate({marginTop: '150px'}, 0);

}

</script>
