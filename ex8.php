<?php


	function dia ($dia) {
		switch ($dia){
	        	case 1:
		            echo "domingo" . "\n";
		            break;
		        case 2:
		            echo "segunda" . "\n";
		            break;
		        case 3:
		            echo "terca" . "\n";
		            break;
		        case 4:
		            echo "quarta" . "\n";
		            break;
		        case 5:
		            echo "quinta" . "\n";
		            break;
		        case 6:
		            echo "sexta" . "\n";
		            break;
		        case 7:
		            echo "sabado" . "\n";
		            break;
		        default;
		            echo "\n Digite um número válido (1 a 7)";
	   	}
	}

	echo "Digite um número: ";
	$dia = (int)fgets(STDIN);

	echo dia ($dia);
