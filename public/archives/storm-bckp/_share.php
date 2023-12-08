
<!--
SHARE
-->
<div id="dash_stats">
<div class="dash_stats" onClick="share_close()"></div>
<div class="dash_stats2">
<canvas id="imageCanvas"></canvas>
<span>
<em>
<b>Share</b>
<a id="twitterShare"><i class="fa-brands fa-twitter"></i></a>
<a id="telegramShare"><i class="fa-brands fa-telegram"></i></a>
<a id="facebookShare"><i class="fa-brands fa-facebook-f"></i></a>
<a id="whatsappShare"><i class="fa-brands fa-whatsapp"></i></a>
</em>
<em>
<b>Download</b>
<a id="downloadLink" download="storm.jpg"><i class="fa-solid fa-circle-down"></i></a>
</em>
</span>
</div>
</div>

<script>
function share_close(){
$('#dash_stats').css('display', 'none');
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
        
        img.onload = function() {
            // Ajustez ces valeurs selon la taille de votre image
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img, 0, 0);
            ctx.font = '36px sans-serif'; // Modifier selon vos besoins
            ctx.fillStyle = 'white';
			ctx.fillText("$PEPE", 150, 200);
			ctx.fillText("Total Costs", 150, 300);
            ctx.fillText("Total Fees", 150, 400);
			ctx.fillText("Total Proceeds", 150, 500);
            ctx.fillText("Potential ROI", 150, 650);
            ctx.fillText("Potential Profit", 150, 750);
            ctx.fillText("Total Profit", 150, 850);
            ctx.fillText("1 ETH", 650, 300);
            ctx.fillText("0.1 ETH", 650, 400);
            ctx.fillText("+300%", 650, 650);
            ctx.fillText("3.5 ETH", 650, 750);
            ctx.fillStyle = '#53a995';
            ctx.fillText("0.5 ETH", 650, 500);
            ctx.fillText("3 ETH", 650, 850);
			saveImageToServer();
        }

        img.src = '/storm/images/stats.jpg'; // Assurez-vous que le chemin est correct
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
            url: 'save_image.php', // Le script PHP qui va enregistrer l'image
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
    var encodedImageUrl = encodeURIComponent(imageUrl);
    $('#twitterShare').attr('href', `https://twitter.com/intent/tweet?url=${encodedImageUrl}&text=Regardez+mon+image`);
    $('#telegramShare').attr('href', `https://telegram.me/share/url?url=${encodedImageUrl}&text=Regardez+mon+image`);
    $('#facebookShare').attr('href', `https://www.facebook.com/sharer/sharer.php?u=${encodedImageUrl}`);
    $('#whatsappShare').attr('href', `https://api.whatsapp.com/send?text=Regardez+mon+image ${encodedImageUrl}`);
}
	
});
</script>

