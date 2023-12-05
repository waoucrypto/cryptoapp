<?php
$largeur = 800; // Largeur de l'image désirée
$hauteur = 420; // Hauteur de l'image désirée
$imagefond = $_SERVER['DOCUMENT_ROOT'] . '/storm/images/stats2.jpg';
$image = imagecreatefromjpeg($imagefond);


// Définir les couleurs pour le texte et le fond
$blanc = imagecolorallocate($image, 255, 255, 255);
$vert = imagecolorallocate($image, 59, 200, 164);

// Remplir le fond de l'image avec du noir (ou toute autre couleur)


// Définir le chemin vers la police TTF que vous souhaitez utiliser
$font_path = $_SERVER['DOCUMENT_ROOT'] . '/storm/images/Roboto-Bold.ttf';

	
// Ajouter du texte à votre image
imagettftext($image, 40, 0, 215, 240, $blanc, $font_path, "300%");
imagettftext($image, 25, 0, 470, 190, $blanc, $font_path, "\$PEPE");
imagettftext($image, 50, 0, 470, 260, $vert, $font_path, "$620k");

// Indiquer au navigateur que le contenu est une image PNG
header('Content-Type: image/png');

// Envoyer l'image
imagepng($image);

// Libérer la mémoire
imagedestroy($image);


?>
