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
            ctx.font = '40px sans-serif'; // Modifier selon vos besoins
            ctx.fillStyle = 'white';
			ctx.fillText("Total Costs", 200, 250);
            ctx.fillText("Total Costs", 200, 350);
            ctx.fillText("Total Costs", 200, 450);
            ctx.fillText("Total Costs", 200, 600);
            ctx.fillText("Total Costs", 200, 700);
            ctx.fillText("Total Costs", 200, 800);
            ctx.fillText("300", 600, 250);
            ctx.fillText("400", 600, 350);
            ctx.fillText("500", 600, 450);
            ctx.fillText("600", 600, 600);
            ctx.fillText("700", 600, 700);
            ctx.fillText("800", 600, 800);
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
	
});
