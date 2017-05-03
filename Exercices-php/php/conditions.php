<?php 
	$heure = date('G');
	$minutes = date('i');
	$age = 0;
	$sexe = '';
			
	if (4 < $heure && $heure < 10) {
		echo 'Bonjour!';
	} elseif ($heure == 9 && $minutes > 0) {
		echo 'Bonne journée!';
	} elseif (9 < $heure && $heure < 13) {
		echo 'Bonne journée!';
	} elseif ($heure == 12 && $minutes > 0) {
		echo 'Bon après-midi!';
	} elseif (12 < $heure && $heure < 17) {
		echo "Bon après-midi!";
	} elseif ($heure == 16 && $minutes > 0) {
		echo 'Bon après-midi!';
	} elseif (15 < $heure && $heure < 22) {
		echo "Bonne soirée!";
	} elseif ($heure == 21 && $minutes > 0) {
		echo 'Bonne nuit!';
	} elseif (21 < $heure && $heure < 5) {
		echo "Bonne nuit!";
	} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>conditions</title>
</head>
<body>
	<form action="conditions.php" method="get">
		<label for ="age"> Quel âge avez-vous ?</label>
			<input type="number" id="age" value='' name ="age" min="1" max="200"><br />
		<label> Sexe : </label>
			<input type="radio" id="genre" name="genre" value="homme"><label for="genre" >Homme </label>
			<input type="radio" id="genre2" name="genre" value="femme" checked><label for="genre2"> Femme</label>
		<br /><input type="submit"><br />
	<?php
	//Script pour message en lien avec l'âge et le sexe
		
		if ($_GET["age"] && $_GET["genre"]) {
		

			if ($age < 12 && $sexe =='homme') {
				echo " Salut petit!";
			} elseif ($age < 12 && $sexe == 'femme') {
				echo " Salut petite!";
			} elseif ($age > 11 && $age < 19 && $sexe =='homme') {
				echo " Salut l'ado!";
			} elseif ($age > 11 && $age < 19 && $sexe == 'femme') {
				echo " Salut l'adolescente!";
			} elseif ($age > 18 && $age < 116 ) {
				echo " Salut l'adulte!";
			} elseif ($age > 115 && $sexe =='homme') {
				echo " Wow! Toujours vivant?";
			} elseif ($age > 115 && $sexe == 'femme') {
				echo " Wow! Toujours vivante?";
			}
			if ($_GET["age"]) {
				$message = ($age > 20 && $age < 41 && $sexe == 'femme') ? 'Bonjour, bienvenue parmi nous!' : 'Désolé, vous ne remplissez pas les critères de sélection.';
				echo $message;
			}
		}
	?>
		<br /> <label for="note">Note de l'élève</label>
		<input type="number" id='note' name='note' value='' min='0' max='20' placeholder='note'>
	<?php
		$note = $_GET["note"];
		switch ($note) {
			case '':
				echo "";
				break;
			case 0:
			case 1:
			case 2:
			case 3:
				echo 'Ce travail est nul.';
				break;
			case 4:
			case 5:
			case 6:
			case 7:
			case 8:
			case 9:
				echo 'Ce travail n\'est pas terrible';
				break;
			case 10:
				echo 'Tout juste!';
				break;
			case 11:
			case 12:
			case 13:
			case 14:
				echo 'C\'est pas mal.';
				break;
			case 15:
			case 16:
			case 17:
			case 18:
				echo 'Bravo!';
				break;
			case 19:
			case 20:
				echo 'Police! Arrêtez ce tricheur!';
				break;
			default:
				
				break;
		}

	?>

	</form>


</body>
</html>