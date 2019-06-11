<?php


	function polTocm ($pol) {
		$centi = $pol * 2.54;
		return $centi;
	}

	echo "Digite o valor em polegadas para ser convertido: ";
	$pol = (float)fgets(STDIN);

	echo polTocm ($pol);
