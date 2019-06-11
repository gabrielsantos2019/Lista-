<?php


    function hipotenusa ($catA,$catB) {
        $hip = sqrt($cat1**2 + $cat2**2);
        return $hip;
    } 

    echo "\nInforme o primeiro cateto: ";
    $cat1 = (float)fgets(STDIN);

    echo "Informe o segundo cateto: ";
    $cat2 = (float)fgets(STDIN);

    $hip = hipotenusa($cat1,$cat2);

    echo "\n O valor da hipotenusa é igual a: $hip \n \n";
