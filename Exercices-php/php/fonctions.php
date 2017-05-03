<?php
	
	somme(24,398);
	$name = 'emilie';
	$cap = ucfirst($name);
	echo $cap;
	echo "<br/>".date("D d F Y ga:i:s");

	function somme ($a,$b) {
		if (is_int($a) && is_int($b)) {
			echo ($a + $b)."<br/>";
		} else {
			echo 'Erreur, argument non numérique'."<br/>";
		}

	} 
	function initiales($string)
{
    $words = explode(" ", $string);
    $initiale = '';
 
	foreach($words as $init){
		$initiale .= $init{0};
    }
    echo "<br/>".strtoupper($initiale);

}
	initiales('test de fonction');


	function ae ($string) {
		echo "<br/>".str_replace('ae','æ',$string);
	}
	ae('caecotrophie');
	ae('chaenichthys');
	ae('microsphaera');
	ae('sphaerotheca');

	function ae_inv ($string) {
		echo "<br/>".str_replace('æ','ae',$string);
	}
	ae_inv('cæcotrophie');
	ae_inv('chænichthys');
	ae_inv('microsphæra');
	ae_inv('sphærotheca');

	function feedback ($message,$class = 'info') {
		$mess = ucfirst($message);
		echo "<div class=".$class.">".$mess."</div>";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php feedback("adresse email incorrecte"); ?>
</body>
</html>