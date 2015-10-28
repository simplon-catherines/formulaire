<?php
echo "votre pseudo".$_POST['pseudo'];

echo "votre couleur de yeux".$_POST['votre_couleur_de_yeux'];

$message = $_POST['pseudo'].';'.$_POST['votre_couleur_de_yeux'];


$file = "extractionduformulaire";
file_put_contents ($file,$message,FILE_APPEND);

?>
