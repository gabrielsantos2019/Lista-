<?php


    function FahrparaCel ($tf) {
            $tempc = ($tempf -32) * 5/9;
            return $tempc;
    }

    echo "\nDigite a temperatura em Fahrenheit: " ;

    $tempf = (float)fgets(STDIN);
    $tempc = FahrparaCel($tempf);
    
    echo "$tempf Fahrenheit equivalem a $tempc ° Celsius \n \n";
