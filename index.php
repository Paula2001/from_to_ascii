<?php
setlocale(LC_ALL,"US");

function convertToString( $number){
    $number_string =  $number;
    $string = '';
    $number = '';
    for($i = 0; $i < strlen($number_string);$i++){
            $number .= $number_string[$i];

        if(ctype_alpha(chr($number)) || is_numeric(chr($number)) || $number == 32) {
            echo $number ;
            echo "<br>";
            $string .= chr($number);
//            echo $number ;
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

echo convertToString("841041051153211910198115105116101324950513210511532100111119110321171101161051083212111111732999710810832109117989711510410111432105110102111114109971161051111103211610199104110111108111103121321161113210711011111932109111114101324950515151");
echo "<br>";

echo convertToASCII('This website 123 is down until you call mubasher information technology to know more 12333');
echo "<br>";


//echo convertToASCII('pola');
echo "<pre>";
echo "</pre>";
