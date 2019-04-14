<?php
setlocale(LC_ALL,"US");

function convertToString( $number){
    $number_string =  $number;
    $string = '';
    $number = '';
    for($i = 0; $i < strlen($number_string);$i++){
            $number .= $number_string[$i];

        if(ctype_alpha(chr($number)) || $number == 32) {
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

echo convertToString("1161011151161051101033211610410511532116101120116");
echo "<br>";

echo convertToASCII('testing this text');
echo "<br>";


//echo convertToASCII('pola');
echo "<pre>";
echo "</pre>";
