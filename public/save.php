<?

require __DIR__ . '/../lib/functions.php';

if (isset($_POST['nom']) && isset($_POST['prenom'])) {
	// on affiche nos résultats
	echo 'Votre Nom est '.$_POST['nom'].' et votre Prénom est '.$_POST['prenom'];
	writeFormData($_POST);
}
?>