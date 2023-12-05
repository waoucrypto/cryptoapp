
<?php

// Chemin où vous souhaitez enregistrer l'image
$upload_dir = "/storm/uploads/";
// Créez le dossier s'il n'existe pas
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// Obtenez les données de l'image envoyées en POST
$img = $_POST['imgBase64'];
// Retirez la partie de l'URL de données pour obtenir uniquement les données Base64
$img = str_replace('data:image/jpeg;base64,', '', $img); // Changez 'png' en 'jpeg'
$img = str_replace(' ', '+', $img);
// Convertissez les données Base64 en données binaires
$data = base64_decode($img);
// Créez un nom de fichier (peut être basé sur un identifiant unique ou autre)
$fileName = uniqid() . '.jpg';
// Chemin complet du fichier
$file = $upload_dir . $fileName;
// Enregistrez le fichier
$success = file_put_contents($file, $data);

// Envoyez l'URL de l'image enregistrée en retour si réussi, sinon envoyez une erreur
print $success ? $file : 'Unable to save the file.';

?>
