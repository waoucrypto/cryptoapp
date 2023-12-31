
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
<li><b>Wallets</b></li>
<li id="settings_menu_wallet_create"><a onClick="wallet_create()"><i class="fa-solid fa-plus"></i> Create Wallet</a></li>
<li id="settings_menu_wallet_import"><a onClick="wallet_import()"><i class="fa-solid fa-upload"></i> Import Wallet</a></li>
<li id="settings_menu_wallet_my"><a onClick="wallet_my()"><i class="fa-regular fa-rectangle-list"></i> My Wallets</a></li>
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
<div class="dash_settings" id="wallet_create">
<div class="dash_settings_title"><i class="fa-solid fa-arrow-left" onClick="dash_settings_close()"></i> Create Wallet</div>
<form>
<li class="w100"><label>Name your wallet</label><input type="text" placeholder="Wallet 1"></li>
<li class="w100"><input type="submit" value="Save" onClick="wallet_create2(event)"></li>
</form>
</div>
<div class="dash_settings" id="wallet_create2">
<div class="dash_settings_title"><i class="fa-solid fa-arrow-left" onClick="dash_settings_close()"></i> Successfully Created Wallet</div>
<form>
<li class="dash_settings_confirmation">
<b>Save your private key</b> 
<p>If you delete this message, we will not show your private key again.
<em>0x4b8e8b3f634fba1c5ed20f03e8c5a8b305d8e3a2f1b3c4d5e6f60718293a4b5c <i class="fa-regular fa-copy"></i></em>
</p>
</li>
</form>
</div>

<!--
WALLET IMPORT
-->
<div class="dash_settings" id="wallet_import">
<div class="dash_settings_title"><i class="fa-solid fa-arrow-left" onClick="dash_settings_close()"></i> Import Wallet</div>
<form>
<li class="w100"><label>Name your wallet</label><input type="text" placeholder="Wallet 1"></li>
<li class="w100"><input type="submit" value="Next" onClick="wallet_import2(event)"></li>
</form>
</div>
<div class="dash_settings" id="wallet_import2">
<div class="dash_settings_title"><i class="fa-solid fa-arrow-left" onClick="dash_settings_close()"></i> Import your private key (MetaMask)</div>
<form>
<li class="w100"><label>Paste your private key</label><input type="text" placeholder="0X000...0000"></li>
<li class="w100"><input type="submit" value="Save" onClick="wallet_import3(event)"></li>
<li class="w100b">
<div class="wallet_import2_img">Step 1<img src="/storm/images/privatekey1.gif"></div>
<div class="wallet_import2_img">Step 2<img src="/storm/images/privatekey2.gif"></div>
<div class="wallet_import2_img">Step 3<img src="/storm/images/privatekey3.gif"></div>
</li>
</form>
</div>
<div class="dash_settings" id="wallet_import3">
<div class="dash_settings_title"><i class="fa-solid fa-arrow-left" onClick="dash_settings_close()"></i> Successfully Created Wallet</div>
<form>
<div class="dash_settings_confirmation">Done. Congrats</div>
</form>
</div>

<!--
WALLET MY
-->
<div class="dash_settings" id="wallet_my">
<div class="dash_settings_title"><i class="fa-solid fa-arrow-left" onClick="dash_settings_close()"></i> My Wallets</div>
<form>
<li class="dash_settings_wallets">
<div><u><i class="fa-solid fa-pen-to-square"></i> Wallet 1: 3 ETH</u><u><i class="fa-regular fa-circle-xmark"></i></u></div>
<div>0x4b8e8b3f634e3a2f1b3c4d5e6f60718293a4b7h</div>
<div><a class="on">Default wallet<i class="fa-solid fa-check"></i></a><a>Sniper Wallets<i class="fa-solid fa-check"></i></a><a>Buy, Sell Wallets<i class="fa-solid fa-check"></i></a></div>
</li>
<li class="dash_settings_wallets">
<div><u><i class="fa-solid fa-pen-to-square"></i> Wallet 2: 1.5 ETH</u><u><i class="fa-regular fa-circle-xmark"></i></u></div>
<div>0x4b8e8b3f634e3a2f1b3c4d5e6f60718293a4b0p</div>
<div><a>Default wallet<i class="fa-solid fa-check"></i></a><a class="on">Sniper Wallets<i class="fa-solid fa-check"></i></a><a>Buy, Sell Wallets<i class="fa-solid fa-check"></i></a></div>
</li>
<li class="dash_settings_wallets">
<div><u><i class="fa-solid fa-pen-to-square"></i> Wallet 3: 1.67 ETH</u><u><i class="fa-regular fa-circle-xmark"></i></u></div>
<div>0x4b8e8b3f634e3a2f1b3c4d5e6f60718293a4b3v</div>
<div><a class="on">Default wallet<i class="fa-solid fa-check"></i></a><a class="on">Sniper Wallets<i class="fa-solid fa-check"></i></a><a>Buy, Sell Wallets<i class="fa-solid fa-check"></i></a></div>
</li>
<li class="dash_settings_wallets">
<div><u><i class="fa-solid fa-pen-to-square"></i> Wallet 4: 0.2 ETH</u><u><i class="fa-regular fa-circle-xmark"></i></u></div>
<div>0x4b8e8b3f634e3a2f1b3c4d5e6f60718293a4b9a</div>
<div><a class="on">Default wallet<i class="fa-solid fa-check"></i></a><a>Sniper Wallets<i class="fa-solid fa-check"></i></a><a>Buy, Sell Wallets<i class="fa-solid fa-check"></i></a></div>
</li>
<li class="dash_settings_wallets">
<div><u><i class="fa-solid fa-pen-to-square"></i> Wallet 5: 122 ETH</u><u><i class="fa-regular fa-circle-xmark"></i></u></div>
<div>0x4b8e8b3f634e3a2f1b3c4d5e6f60718293a4b88</div>
<div><a>Default wallet<i class="fa-solid fa-check"></i></a><a>Sniper Wallets<i class="fa-solid fa-check"></i></a><a class="on">Buy, Sell Wallets<i class="fa-solid fa-check"></i></a></div>
</li>

<li>
</form>
</div>

<!--
BUY
-->
<div class="dash_settings" id="settings_buy">
<div class="dash_settings_title"><i class="fa-solid fa-arrow-left" onClick="dash_settings_close()"></i> Buy Settings</div>
<form>
<li><label>Buy GWEI</label><input type="text" placeholder="0.01 ETH" onClick="buy1()"></li>
<li><label>Approve GWEI</label><input type="text" placeholder="0.01 ETH" onClick="buy2()"></li>
<li><label>Sell GWEI</label><input type="text" placeholder="0.01 ETH" onClick="buy3()"></li>
<li><label>Anti-Rug GWEI</label><input type="text" placeholder="0.01 ETH" onClick="buy4()"></li>
<li><label>Buy Tax Limit</label><input type="text" placeholder="0.01 ETH" onClick="buy5()"></li>
<li><label>Sell Tax Limit</label><input type="text" placeholder="0.01 ETH" onClick="buy6()"></li>
<li><label>Min Liquidity Limit</label><input type="text" placeholder="0.01 ETH" onClick="buy7()"></li>
<li><label>Max Liquidity Limit</label><input type="text" placeholder="0.01 ETH" onClick="buy8()"></li>
<li class="w100"><input type="submit" value="Save"></li>
<li>
<span id="buy1">
<b>Buy GWEI</b>
<p>Set the additional GWEI you're willing to use for buying the desired token. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
<span id="buy2">
<b>Approve GWEI</b>
<p>Determine the extra GWEI you're willing to use to expedite token approval following your purchase. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
<span id="buy3">
<b>Sell GWEI</b>
<p>Set the additional GWEI you're willing to use for selling the desired token. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
<span id="buy4">
<b>Anti-Rug GWEI</b>
<p>Specify the extra GWEI you're willing to use for selling the desired token when front-running a rug or tax change. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
<span id="buy5">
<b>Buy Tax Limit</b>
<p>The Snipe only triggers if the buy tax of the selected token is at or lower than the set limit. Example: Your buy tax limit is set at 80%. If XYZ token launches with a 99 buy tax, Storm will not fire, and the snipe stays in "pending mode." If the developer lowers the buy tax to 75%, Storm will fire in the same block as the tax change.
<br><br>Note:
<br>- Both buy tax and sell tax limits must be met for Storm to fire</p>
</span>
<span id="buy6">
<b>Sell Tax Limit</b>
<p>The Snipe only triggers if the sell tax of the selected token is at or lower than the set limit. Example: Your sell tax limit is set at 80%. If XYZ token launches with a 99 sell tax, Storm will not fire, and the snipe stays in "pending mode." If the developer lowers the sell tax to 75%, Storm will fire in the same block as the tax change. 
<br><br>Note:
<br>-Both buy tax and sell tax limits must be met for Storm to fire.</p>
</span>
<span id="buy7">
<b>Min Liquidity Limit</b>
<p>The Snipe only triggers if the paired liquidity of the token is equal to or higher than the amount set by the user. The limit is based on USD value.</p>
</span>
<span id="buy8">
<b>Max Liquidity Limit</b>
<p>The Snipe only triggers if the paired liquidity of the token is equal to or lower than the amount set by the user. The limit is based on USD value.</p>
</span>
</li>
</form>
</div>


<!--
SELL
-->
<div class="dash_settings" id="settings_sell">
<div class="dash_settings_title"><i class="fa-solid fa-arrow-left" onClick="dash_settings_close()"></i> Sell Settings</div>
<form>
<li><label>Max Sell Tax</label><input type="text" placeholder="0.01 ETH" onClick="sell1()"></li>
<li><label>Sell GWEI</label><input type="text" placeholder="0.01 ETH" onClick="sell2()"></li>
<li><label>Sell Rug GWEI</label><input type="text" placeholder="0.01 ETH" onClick="sell3()"></li>
<li><label>Min Liquidity Value</label><input type="text" placeholder="0.01 ETH" onClick="sell4()"></li>
<li class="w100"><input type="submit" value="Save"></li>
<li>
<span id="sell1">
<b>Max Sell Tax</b>
<p>If developer changes the sell tax above your set limit, Storm will try and frontrun the tax change transaction.</p>
</span>
<span id="sell2">
<b>Sell GWEI</b>
<p>Set the additional GWEI you're willing to use for selling the desired token. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
<span id="sell3">
<b>Sell Rug GWEI</b>
<p>Specify the extra GWEI you're willing to use for selling the desired token when front-running a rug or tax change. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
<span id="sell4">
<b>Min Liquidity Value</b>
<p>If the paired liquidity falls to or lower than the amount the user set up, Storm will initiate a sell. The limit is based on USD value.</p>
</span>
</li>
</form>
</div>


<!--
SNIPE
-->
<div class="dash_settings" id="settings_snipe">
<div class="dash_settings_title"><i class="fa-solid fa-arrow-left" onClick="dash_settings_close()"></i> Snipe Settings</div>
<form>
<li><label>Snipe Amount</label><input type="text" placeholder="0.01 ETH" onClick="snipe1()"></li>
<li><label>Snipe Tip</label><input type="text" placeholder="0.01 ETH" onClick="snipe2()"></li>
<li><label>Backup Tip</label><input type="text" placeholder="0.01 ETH" onClick="snipe3()"></li>
<li><label>Approve GWEI</label><input type="text" placeholder="0.01 ETH" onClick="snipe4()"></li>
<li><label>Sell GWEI</label><input type="text" placeholder="0.01 ETH" onClick="snipe5()"></li>
<li><label>Anti-Rug GWEI</label><input type="text" placeholder="0.01 ETH" onClick="snipe6()"></li>
<li><label>Buy Tax Limit</label><input type="text" placeholder="0.01 ETH" onClick="snipe7()"></li>
<li><label>Sell Tax Limit</label><input type="text" placeholder="0.01 ETH" onClick="snipe8()"></li>
<li><label>Min Liquidity Limit</label><input type="text" placeholder="0.01 ETH" onClick="snipe9()"></li>
<li><label>Max Liquidity Limit</label><input type="text" placeholder="0.01 ETH" onClick="snipe10()"></li>
<li class="w100"><input type="submit" value="Save"></li>
<li>
<span id="snipe1">
<b>Snipe Amount</b>
<p>This is the MaxSpend amount that you allow the bot to use for purchasing the MaxTransaction amount of the token. If the MaxTransaction value is lower than your MaxSpend, any remaining ETH will be returned to your wallet. If the MaxTransaction is higher than your MaxSpend, it will purchase as many tokens as possible for the MaxSpend value (unless you've set up slippage).</p>
</span>
<span id="snipe2">
<b>Snipe Tip</b>
<p>Specify the additional ETH you're willing to pay as a bribe to the block builder to get ahead of other snipers. This applies only to unlaunched tokens you plan to snipe.
<br><br>Note: 
<br>- Storm bot uses ETH as a bribe and not GWEI.
<br>- In case your snipe fails, you will never lose your Tip amount.</p>
</span>
<span id="snipe3">
<b>Backup Tip</b>
<p>FoF does not fire on MEV launches or Deadblock launches, However, if you have Backup enabled, it will trigger using the Backup Tip in these cases, instead of the Snipe Tip.
<br><br>Note: 
<br>- Storm bot uses ETH as a bribe and not GWEI.
<br>- In case your snipe fails, you will never lose your Tip amount.</p>
</span>
<span id="snipe4">
<b>Approve GWEI</b>
<p>Determine the extra GWEI you're willing to use to expedite token approval following your purchase. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
<span id="snipe5">
<b>Sell GWEI</b>
<p>Set the additional GWEI you're willing to use for selling the desired token. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
<span id="snipe6">
<b>Anti-Rug GWEI</b>
<p>Specify the extra GWEI you're willing to use for selling the desired token when front-running a rug or tax change. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
<span id="snipe7">
<b>Buy Tax Limit</b>
<p>The Snipe only triggers if the buy tax of the selected token is at or lower than the set limit. Example: Your buy tax limit is set at 80%. If XYZ token launches with a 99 buy tax, Storm will not fire, and the snipe stays in "pending mode." If the developer lowers the buy tax to 75%, Storm will fire in the same block as the tax change.
<br><br>Note:
<br>- Both buy tax and sell tax limits must be met for Storm to fire</p>
</span>
<span id="snipe8">
<b>Sell Tax Limit</b>
<p>The Snipe only triggers if the sell tax of the selected token is at or lower than the set limit. Example: Your sell tax limit is set at 80%. If XYZ token launches with a 99 sell tax, Storm will not fire, and the snipe stays in "pending mode." If the developer lowers the sell tax to 75%, Storm will fire in the same block as the tax change. 
<br>
<br>Note:<br>-Both buy tax and sell tax limits must be met for Storm to fire.</p>
</span>
<span id="snipe9">
<b>Min Liquidity Limit</b>
<p>The Snipe only triggers if the paired liquidity of the token is equal to or higher than the amount set by the user. The limit is based on USD value.</p>
</span>
<span id="snipe10">
<b>Max Liquidity Limit</b>
<p>The Snipe only triggers if the paired liquidity of the token is equal to or lower than the amount set by the user. The limit is based on USD value.</p>
</span>
</li>
</form>
</div>


<!--
GAS
-->
<div class="dash_settings" id="settings_gas">
<div class="dash_settings_title"><i class="fa-solid fa-arrow-left" onClick="dash_settings_close()"></i> Gas Settings</div>
<form>
<li><label>Auto Snipe Tip</label><input type="text" placeholder="0.01 ETH" onClick="gas1()"></li>
<li><label>First Bundle Backup Tip</label><input type="text" placeholder="0.01 ETH" onClick="gas2()"></li>
<li><label>Buy GWEI</label><input type="text" placeholder="0.01 ETH" onClick="gas3()"></li>
<li><label>Approve GWEI</label><input type="text" placeholder="0.01 ETH" onClick="gas4()"></li>
<li><label>Sell GWEI</label><input type="text" placeholder="0.01 ETH" onClick="gas5()"></li>
<li><label>Anti-Rug GWEI</label><input type="text" placeholder="0.01 ETH" onClick="gas6()"></li>
<li class="w100"><input type="submit" value="Save"></li>
<li>
<span id="gas1">
<b>Auto Snipe Tip</b>
<p>Specify the additional ETH you're willing to pay as a bribe to the block builder to get ahead of other snipers. This applies only to unlaunched tokens you plan to snipe.
<br><br>Note: 
<br>- Storm bot uses ETH as a bribe and not GWEI.
<br>- In case your snipe fails, you will never lose your Tip amount.</p>
</span>
<span id="gas2">
<b>First Bundle Backup Tip</b>
<p>FoF does not fire on MEV launches or Deadblock launches, However, if you have Backup enabled, it will trigger using the Backup Tip in these cases, instead of the Snipe Tip.
<br><br>Note: 
<br>- Storm bot uses ETH as a bribe and not GWEI.
<br>- In case your snipe fails, you will never lose your Tip amount.</p>
</span>
<span id="gas3">
<b>Buy GWEI</b>
<p>Set the additional GWEI you're willing to use for buying the desired token. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
<span id="gas4">
<b>Approve GWEI</b>
<p>Determine the extra GWEI you're willing to use to expedite token approval following your purchase. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
<span id="gas5">
<b>Sell GWEI</b>
<p>Set the additional GWEI you're willing to use for selling the desired token. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
<span id="gas6">
<b>Anti-Rug GWEI</b>
<p>Specify the extra GWEI you're willing to use for selling the desired token when front-running a rug or tax change. More GWEI secures earlier positions in the block. This is additional GWEI above the base GWEI of the block.</p>
</span>
</li>
</form>
</div>


<!--
TOGGLE
-->
<div class="dash_settings" id="settings_toggle">
<div class="dash_settings_title"><i class="fa-solid fa-arrow-left" onClick="dash_settings_close()"></i> Toggle Settings</div>
<form>
<li class="w100"><label>Anti-Rug</label><input type="text" placeholder="0.01 ETH" onClick="toggle1()"></li>
<li><label>First Bundle or Fail</label><input type="text" placeholder="0.01 ETH" onClick="toggle2()"></li>
<li><label>First Bundle Backup</label><input type="text" placeholder="0.01 ETH" onClick="toggle3()"></li>
<li><label>Transfer on Blacklist</label><input type="text" placeholder="0.01 ETH" onClick="toggle4()"></li>
<li><label>MaxTx or Revert</label><input type="text" placeholder="0.01 ETH" onClick="toggle5()"></li>
<li class="w100"><input type="submit" value="Save"></li>
<li>
<span id="toggle1">
<b>Anti-Rug</b>
<p>If it's green, it's toggled on. If you wish to snipe without anti-rug, you can turn it off. If the tax goes above your safety tax settings or the developer tries to rug the token (any instance that makes investors unable to sell), Storm will attempt to frontrun the transaction and sell your tokens.
<br><br>Note:
<br>- Developers often "shake out" bot users with fake tax settings. If you have anti-rug on, it will trigger.
<br>- It has an 80-85% success rate, and can only land on MEV blocks.</p>
</span>
<span id="toggle2">
<b>First Bundle or Fail</b>
<p>If its green, it is toggled on. If you wish to snipe without First Bundle or Fail on, you can turn it off. When enabled, Storm will always aim for the first buy when trading begins. It can only land on block 0 as the first bundle. It is recommended to have at least 10 participating wallets for this to work effectively.
<br><br>Note: 
<br>- The more wallets participate in the First Bundle or Fail, the higher the chance of winning the first buy!
<br>- This feature does not work on MEV launches and Deadblock launches.</p>
</span>
<span id="toggle3">
<b>First Bundle Backup</b>
<p>If it's green, it's toggled on. If you wish to snipe without First Bundle or Fail Backup, you can turn it off. FoF does not trigger on MEV launches or Deadblock launches, but if you have Backup enabled, it will trigger. On MEV launches, it will buy on block 1, and on Deadblock launches, it will buy on the first safe block. In this case, it will use your Backup Miner Tip.
<br><br>Note:
<br>- It will use the FoF Backup Miner Tip, not the Auto Sniper Miner Tip!</p>
</span>
<span id="toggle4">
<b>Transfer on Blacklist</b>
<p>If its green, it is toggled on. If you wish to snipe without Transfer on Blacklist on, you can turn it off. If the developer tries to blacklist your wallet, Storm will call the Transfer on Blacklist function to send your tokens to the 'transfer wallet' as long as it is enabled.
<br><br>Note:
<br>- You must have transfer wallets set up in Storm for it to work.
<br>- Your transfer wallets must have at least 0.1 ETH for it to work.</p>
</span>
<span id="toggle5">
<b>MaxTx or Revert</b>
<p>If you have this feature enabled, you can limit your risk tolerance and only allow the bot to buy if the maximum transaction does not exceed your MaxSpend amount. If a token does not have a maximum transaction set up, this feature is ignored.
Example: The MaxTx of the token is 2%, and you set your maximum spend at 0.1 ETH. If 2% is worth more than 0.1 ETH at the time of your buy, then your transaction will revert.
<br><br>Note:
<br>- If you revert due to this setting, it will cost you the base GWEI, but you will not lose your tip.
<br>- Tax applies post-execution.</p>
</span>
</li>
</form>
</div>


<!--
SAFETY
-->
<div class="dash_settings" id="settings_safety">
<div class="dash_settings_title"><i class="fa-solid fa-arrow-left" onClick="dash_settings_close()"></i> Safety Settings</div>
<form>
<li><label>Buy Tax Limit</label><input type="text" placeholder="0.01 ETH" onClick="safety1()"></li>
<li><label>Sell Tax Limit</label><input type="text" placeholder="0.01 ETH" onClick="safety2()"></li>
<li class="w100"><label>Slippage</label><input type="text" placeholder="0.01 ETH" onClick="safety3()"></li>
<li><label>Min Liquidity Limit</label><input type="text" placeholder="0.01 ETH" onClick="safety4()"></li>
<li><label>Max Liquidity Limit</label><input type="text" placeholder="0.01 ETH" onClick="safety5()"></li>
<li class="w100"><input type="submit" value="Save"></li>
<li>
<span id="safety1">
<b>Buy Tax Limit</b>
<p>The Snipe only triggers if the buy tax of the selected token is at or lower than the set limit. Example: Your buy tax limit is set at 80%. If XYZ token launches with a 99 buy tax, Storm will not fire, and the snipe stays in "pending mode." If the developer lowers the buy tax to 75%, Storm will fire in the same block as the tax change.
<br><br>Note:
<br>- Both buy tax and sell tax limits must be met for Storm to fire</p>
</span>
<span id="safety2">
<b>Sell Tax Limit</b>
<p>The Snipe only triggers if the sell tax of the selected token is at or lower than the set limit. Example: Your sell tax limit is set at 80%. If XYZ token launches with a 99 sell tax, Storm will not fire, and the snipe stays in "pending mode." If the developer lowers the sell tax to 75%, Storm will fire in the same block as the tax change. 
<br><br>Note:
<br>- Both buy tax and sell tax limits must be met for Storm to fire.</p>
</span>
<span id="safety3">
<b>Slippage</b>
<p>Normal 0-99% range. It will allow that much movement in the price or the sell times out. It is important to consider the size of your trade, the volatility of the market, and the depth of the liquidity pool. Make sure to also set a slippage tolerance that is appropriate for your risk tolerance.
<br><br>Note:
<br>- If you set it to 100, it will be considered "unlimited".</p>
</span>
<span id="safety4">
<b>Min Liquidity Limit</b>
<p>The Snipe only triggers if the paired liquidity of the token is equal to or higher than the amount set by the user. The limit is based on USD value.</p>
</span>
<span id="safety5">
<b>Max Liquidity Limit</b>
<p>The Snipe only triggers if the paired liquidity of the token is equal to or lower than the amount set by the user. The limit is based on USD value.</p>
</span>
</li>
</form>
</div>

</div>
</div>

</div>
</div>

<script>

function submitno(event) {event.preventDefault();}
	
function wallet_create(){$('.dash_settings').css('display', 'none');$('#wallet_create').css('display', 'flex');$('.dash_wallet1 li').removeClass('on');$('#settings_menu_wallet_create').addClass('on');}
function wallet_import(){$('.dash_settings').css('display', 'none');$('#wallet_import').css('display', 'flex');$('.dash_wallet1 li').removeClass('on');$('#settings_menu_wallet_import').addClass('on');}
function wallet_my(){$('.dash_settings').css('display', 'none');$('#wallet_my').css('display', 'flex');$('.dash_wallet1 li').removeClass('on');$('#settings_menu_wallet_my').addClass('on');}

function wallet_create2(){$('.dash_settings').css('display', 'none');submitno(event);$('#wallet_create2').css('display', 'flex');$('#wallet_create').css('display', 'none');}
function wallet_import2(){$('.dash_settings').css('display', 'none');submitno(event);$('#wallet_import2').css('display', 'flex');$('#wallet_import').css('display', 'none');}
function wallet_import3(){$('.dash_settings').css('display', 'none');submitno(event);$('#wallet_import3').css('display', 'flex');$('#wallet_import2').css('display', 'none');}

function dash_settings_close(){$('.dash_wallet1').css('display', 'flex');$('.dash_settings').css('display', 'none');}

function settings_gas(){$('.dash_settings').css('display', 'none');$('#settings_gas').css('display', 'flex');$('.dash_wallet1 li').removeClass('on');$('#settings_menu_settings_gas').addClass('on');}
function settings_toggle(){$('.dash_settings').css('display', 'none');$('#settings_toggle').css('display', 'flex');$('.dash_wallet1 li').removeClass('on');$('#settings_menu_settings_toggle').addClass('on');}
function settings_safety(){$('.dash_settings').css('display', 'none');$('#settings_safety').css('display', 'flex');$('.dash_wallet1 li').removeClass('on');$('#settings_menu_settings_safety').addClass('on');}
function settings_buy(){$('.dash_settings').css('display', 'none');$('#settings_buy').css('display', 'flex');$('.dash_wallet1 li').removeClass('on');$('#settings_menu_settings_buy').addClass('on');}
function settings_sell(){$('.dash_settings').css('display', 'none');$('#settings_sell').css('display', 'flex');$('.dash_wallet1 li').removeClass('on');$('#settings_menu_settings_sell').addClass('on');}
function settings_snipe(){$('.dash_settings').css('display', 'none');$('#settings_snipe').css('display', 'flex');$('.dash_wallet1 li').removeClass('on');$('#settings_menu_settings_snipe').addClass('on');}

function closeAllGas() {
$('#gas1').hide();
$('#gas2').hide();
$('#gas3').hide();
$('#gas4').hide();
$('#gas5').hide();
$('#gas6').hide();
}
function gas1(){closeAllGas();$('#gas1').toggle();}
function gas2(){closeAllGas();$('#gas2').toggle();}
function gas3(){closeAllGas();$('#gas3').toggle();}
function gas4(){closeAllGas();$('#gas4').toggle();}
function gas5(){closeAllGas();$('#gas5').toggle();}
function gas6(){closeAllGas();$('#gas6').toggle();}
	
function closeAllToggle() {
$('#toggle1').hide();
$('#toggle2').hide();
$('#toggle3').hide();
$('#toggle4').hide();
$('#toggle5').hide();
}
function toggle1(){closeAllToggle();$('#toggle1').toggle();}
function toggle2(){closeAllToggle();$('#toggle2').toggle();}
function toggle3(){closeAllToggle();$('#toggle3').toggle();}
function toggle4(){closeAllToggle();$('#toggle4').toggle();}
function toggle5(){closeAllToggle();$('#toggle5').toggle();}

function closeAllSafety() {
$('#safety1').hide();
$('#safety2').hide();
$('#safety3').hide();
$('#safety4').hide();
$('#safety5').hide();
}
function safety1(){closeAllSafety();$('#safety1').toggle();}
function safety2(){closeAllSafety();$('#safety2').toggle();}
function safety3(){closeAllSafety();$('#safety3').toggle();}
function safety4(){closeAllSafety();$('#safety4').toggle();}
function safety5(){closeAllSafety();$('#safety5').toggle();}
	
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
function buy1(){closeAllBuy();$('#buy1').toggle();}
function buy2(){closeAllBuy();$('#buy2').toggle();}
function buy3(){closeAllBuy();$('#buy3').toggle();}
function buy4(){closeAllBuy();$('#buy4').toggle();}
function buy5(){closeAllBuy();$('#buy5').toggle();}
function buy6(){closeAllBuy();$('#buy6').toggle();}
function buy7(){closeAllBuy();$('#buy7').toggle();}
function buy8(){closeAllBuy();$('#buy8').toggle();}

function closeAllSell() {
$('#sell1').hide();
$('#sell2').hide();
$('#sell3').hide();
$('#sell4').hide();
}
function sell1(){closeAllSell();$('#sell1').toggle();}
function sell2(){closeAllSell();$('#sell2').toggle();}
function sell3(){closeAllSell();$('#sell3').toggle();}
function sell4(){closeAllSell();$('#sell4').toggle();}

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

