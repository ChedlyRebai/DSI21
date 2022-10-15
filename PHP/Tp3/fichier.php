<?php
$nom=$_POST['nom'];
$classe=$_POST['classe'];
$prenom=$_POST['prenom'];

$contenu="nom: ".$nom ." prenom: ". $prenom ." classe: ". $classe ;
$fichier = fopen("fichier.txt", "a");
$ok = fwrite($fichier, $contenu);
echo "nombre de caractères ajoutés: $ok";
fclose ($fichier);
?>