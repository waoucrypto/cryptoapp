<?php include '_layout1.php' ;?>
<?php include '_menu.php' ;?>


<script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>

<style>
header {display:none;}
@media (max-width:1000px){
body {background:#202225;}
header {display:flex;}
}
</style>

<!--
SIGN IN
-->
<div class="login">

<div class="login_right">
<img src="/storm/images/signup.jpg">
</div>

<div class="login_left">
<div class="login_left2">
<span><img src="/storm/images/logo-color.svg"><b>storm</b></span>
<div>
<button id="loginButton"><img src="/storm/images/logo-metamask.svg"> Metamask</button>
<a href="dashboard.php"><img src="/storm/images/logo-walletconnect.svg">WalletConnect</a>
</div>
<em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.
	
	
	
	</em>
</div>
</div>



</div>
<script>
  // Vérifier si MetaMask est installé
  if (typeof window.ethereum !== 'undefined') {
    console.log('MetaMask est installé!');
  } else {
    alert('Veuillez installer MetaMask pour utiliser cette fonctionnalité.');
  }

  const loginButton = document.getElementById('loginButton');

  loginButton.addEventListener('click', () => {
    // Utiliser web3 pour détecter le provider Ethereum injecté par MetaMask
    const web3 = new Web3(window.ethereum);
    let account;

    // Demander à l'utilisateur de se connecter à MetaMask
    window.ethereum.request({ method: 'eth_requestAccounts' })
      .then(accounts => {
        account = accounts[0]; // Stocker la première adresse dans une variable accessible
        console.log('L\'adresse connectée est:', account);

        const message = `Je signe pour authentifier mon compte: ${account}`;
        // Signer le message
        return web3.eth.personal.sign(message, account, "");
      })
      .then(signature => {
        console.log('Signature:', signature);
		   console.log('jkllkjlkjj:');
		
		console.log('account:', account);
        // À ce stade, `account` est accessible car nous l'avons stockée dans une variable à une portée supérieure
        // Vous pouvez maintenant envoyer `account` et `signature` à votre serveur
        // ...
  // Envoyez une requête AJAX avec l'adresse et la signature au backend pour vérification
       $.ajax({
          url: '/api/authenticate', // Remplacez par votre URL d'API backend
          type: 'POST',
          contentType: 'application/json',
          data: JSON.stringify({
            address: account,
            signature: signature
          }),
		   beforeSend: function() {
    console.log('Envoi de la requête d\'authentification...');
  },
          success: function(response) {
            // Connexion réussie, gérer ici la réponse du serveur
            console.log('Utilisateur authentifié avec succès:', response);
			  
			  window.location.href = '/dashboard';

			  
          },
          error: function(xhr, status, error) {
            // Gérer ici l'erreur de connexion
            console.error('Erreur d\'authentification:', error);
          }
        });
		
	
		
      })
      .catch(err => {
        console.error('Erreur lors de la connexion:', err.message);
      });
  });
</script>
	
      




<?php include '_layout2.php' ;?>
