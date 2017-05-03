<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays</title>
</head>
<body>

<?php
/* Exercice 1
	$famille = ['Papa', 'Maman','Soeur','Frère'];
	print_r($famille);
	$plats = ['pâte'];
	print_r($plats);
	$film = ['Rick and morty','Black mirror', 'Spiderman'];
	echo $film[1];

	$moi = [
		'prenom' => 'Gabriele',
		'nom' => 'Virga',
		'age' => 22,
		'aime_l_amour' => true,
		'exCopines' => array('Kerime','Angelica','Angela','Morgane')
	];
	$ex = count($famille) + count($moi);
	echo "<br/>".$ex;
	$moi['nom'] = 'Dieudonné';
	echo "<br/>".$moi['nom'];
	$contenu = count ($moi['exCopines']);
	echo "<br/>".$contenu."<br/>";
	
	echo '<pre>';
	print_r($moi);
	echo '</pre>';
Fin exercice 1 */
/* Exercice 2 
	$moi = [
		'prenom1' => 'Gabriele',
		'nom' => 'Virga',
		'age' => 22,
		'aime_l_amour' => true,
		
	];
	$toi = [
		'prenom'=> 'Hugo',
		'nom' => 'Barcelona',
		'age' => 22,
		'aime_l_amour' => true,
		
	];

	//$nous = array_merge($moi, $toi);
	//print_r($nous);

	$nous2 = array_intersect($moi, $toi);
	print_r($nous2);
Fin exercice 2 */
// Exercice 3 
	$web_development = [
		'frontend' => [],
		'backend' => [],
	];
	
	array_push($web_development['frontend'], 'xhtml');
	array_push($web_development['backend'], 'Ruby on Rails');
	array_push($web_development['frontend'], 'CSS');
	array_push($web_development['backend'], 'Flash');
	array_push($web_development['backend'], 'Javascript');
	array_push($web_development['frontend'], 'Javascript');
	$web_development['frontend'][0] = 'html';
	//unset($web_development['backend'][1]);
	echo "<pre>";
	print_r($web_development);
	echo "</pre>";
//Fin exercice 3 */
?>

</body>
</html>