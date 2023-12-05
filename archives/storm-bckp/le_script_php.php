$(document).ready(function() {
    $('#generateImage').click(function() {
        var canvas = document.getElementById('imageCanvas');
        var ctx = canvas.getContext('2d');
        var img = new Image();
        
        img.onload = function() {
            // Ajustez ces valeurs selon la taille de votre image
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img, 0, 0);
            ctx.font = '48px sans-serif'; // Modifier selon vos besoins
            ctx.fillStyle = 'white';
            ctx.fillText("10000", 50, 100); // Modifier la position selon vos besoins
        }
        
        img.src = '/storm/images/pepe.jpg'; // Assurez-vous que le chemin est correct
    });
});
