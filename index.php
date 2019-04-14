<?php
setLocale(LC_CTYPE, 'FR_fr.UTF-8');


function convertToString($number){
    $number_string = (string) $number;
    $string = '';
    $number = '';
    for($i = 0; $i < strlen($number_string);$i++){
            $number .= (int) $number_string[$i];
        if(ctype_alpha(chr($number)) || $number == 32) {
            $string .= chr($number);
            echo $string ;
            $number = '';
        }
    }
    return $string;
}

function convertToASCII($string){
    $number = '';
    for($i = 0;$i < strlen($string);$i++){
        $number .= ord($string[$i]);
    }
    return $number ;
}

convertToString(8432833211532114);
echo "<br>";
echo convertToASCII('This is true ');
echo "<pre>";
echo "</pre>";
