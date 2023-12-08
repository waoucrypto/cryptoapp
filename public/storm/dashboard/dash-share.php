
<!--
SHARE
-->
<div id="dash_stats">
<div class="dash_stats" onClick="share_close()"><i class="fa-solid fa-xmark"></i></div>
<div class="dash_stats2">
<span>
<em>
<b><?= $latrad["Share"][$_SESSION['langue']] ?></b>
<a href="https://twitter.com/intent/tweet?url=https://apicrypt.cryptomoonitor.com/storm/twitter.php?code=PEPE_tc=1ETH_pr=300&text=Regardez+mon+image" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
<a id="telegramShare" target="_blank"><i class="fa-brands fa-telegram"></i></a>
<a id="facebookShare" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
<a id="whatsappShare" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
</em>
<em>
<b><?= $latrad["Download"][$_SESSION['langue']] ?> </b>
<a id="downloadLink" ><i class="fa-solid fa-download"></i></a>
</em>
</span>
<canvas id="imageCanvas"></canvas>
</div>
</div>

<script>
function share_close(){
$('#dash_stats').css('display', 'none');
$('.dash_stats').animate({opacity: '0'}, 0);
$('.dash_stats2').animate({top: '200px'}, 0);
}
</script>

<script>
$(document).ready(function() {
    $('#generateImage').click(function() {
        var canvas = document.getElementById('imageCanvas');
        var ctx = canvas.getContext('2d');
        var img = new Image();
        
        // Modifier le style de display pour le div#test à 'flex'
        $('#dash_stats').css('display', 'flex');
		$('.dash_stats').animate({opacity: '1'}, 200);
		$('.dash_stats2').animate({top: '50px'}, 100);
		
        img.onload = function() {
            // Ajustez ces valeurs selon la taille de votre image
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img, 0, 0);
			
            var fontSize1 = 48;
            ctx.font = '900 ' + fontSize1 + 'px Roboto, sans-serif';
            ctx.fillStyle = '#3bc8a4';
            var text1 = "$PEPE";
            var textWidth1 = ctx.measureText(text1).width;
            var x1 = (canvas.width - textWidth1) / 2;
            ctx.fillText(text1, x1, 200);

            var fontSize2 = 75;
            ctx.font = '900 ' + fontSize2 + 'px Roboto, sans-serif';
            ctx.fillStyle = '#fff';
            var text2 = " 300%";
            var textWidth2 = ctx.measureText(text2).width;
            var x2 = (canvas.width - textWidth2) / 2;
            ctx.fillText(text2, x2, 450);

            var fontSize3 = 150;
            ctx.font = '900 ' + fontSize3 + 'px Roboto, sans-serif';
            ctx.fillStyle = '#3bc8a4';
            var text3 = "$12.5k";
            var textWidth3 = ctx.measureText(text3).width;
            var x3 = (canvas.width - textWidth3) / 2;
            ctx.fillText(text3, x3, 770);
			
			//	saveImageToServer();
				
			
			var avatar = new Image();
			avatar.onload = function() {
			var avatarSize = 60;
			var username = "@johndoe";
			var usernameFontSize = 24;
			ctx.font = usernameFontSize + 'px Open Sans, sans-serif';
			var usernameWidth = ctx.measureText(username).width;
			var spacing = 15;

			var totalWidth = avatarSize + spacing + usernameWidth;

			var groupStartX = (canvas.width - totalWidth) / 2;

			var avatarX = groupStartX;
			var avatarY = canvas.height - avatarSize - 120; 
			var usernameX = avatarX + avatarSize + spacing; 
			var usernameY = avatarY + avatarSize / 2 + usernameFontSize / 3; 

			ctx.save(); 
			ctx.beginPath();
			ctx.arc(avatarX + avatarSize / 2, avatarY + avatarSize / 2, avatarSize / 2, 0, Math.PI * 2, true);
			ctx.closePath();
			ctx.clip();

			ctx.drawImage(avatar, avatarX, avatarY, avatarSize, avatarSize);

			ctx.restore(); 

			ctx.fillStyle = '#fff';
			ctx.fillText(username, usernameX, usernameY);
			};

			avatar.src = '/images/avatar.jpg';

			
			
        }

        img.src = '/images/stats.jpg'; // Assurez-vous que le chemin est correct
    });
	
        $('#downloadLink').click(function() {
        // Assurez-vous que le canvas est à jour avec l'image que vous souhaitez télécharger
        var canvas = document.getElementById('imageCanvas');
        var dataURL = canvas.toDataURL('image/jpeg', 1.0); // 1.0 est pour la qualité d'image
       $(this).attr('href', dataURL);
	 		
			   $(this).attr('download', 'storm.jpg');
    });
	
	
    // Fonction pour enregistrer l'image sur le serveur
    function saveImageToServer() {
        var canvas = document.getElementById('imageCanvas');
        var imageData = canvas.toDataURL('image/jpeg', 1.0); // Changez 'image/png' en 'image/jpeg'

        // Utilisez AJAX pour envoyer les données de l'image au serveur
        $.ajax({
            type: 'POST',
            url: '_dash_share2.php', // Le script PHP qui va enregistrer l'image
            data: {
                imgBase64: imageData
            },
            success: function(data) {
                console.log('Image saved:', data);
                // Mettez à jour les liens de partage avec l'URL retournée par le serveur
                updateShareLinks(data);
            },
            error: function(e) {
                console.log('Error save:', e);
            }
        });
    }
	
	
// Mettre à jour les liens de partage
function updateShareLinks(imageUrl) {
    var encodedImageUrl = (imageUrl);
    $('#twitterShare').attr('href', `https://twitter.com/intent/tweet?url=https://apicrypt.cryptomoonitor.com/storm/twitter.php?code=PEPE_tc=1ETH_pr=300&text=Regardez+mon+image`);
    $('#telegramShare').attr('href', `https://telegram.me/share/url?url=https://apicrypt.cryptomoonitor.com/storm/${encodedImageUrl}&text=Regardez+mon+image`);
    $('#facebookShare').attr('href', `https://www.facebook.com/sharer/sharer.php?u=https://apicrypt.cryptomoonitor.com/storm/${encodedImageUrl}`);
    $('#whatsappShare').attr('href', `https://api.whatsapp.com/send?text=Regardez+mon+image https://apicrypt.cryptomoonitor.com/storm/${encodedImageUrl}`);
}
	
});
</script>

