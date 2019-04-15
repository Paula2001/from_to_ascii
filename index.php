<?php
setlocale(LC_ALL,"US");

function convertToString( $number){
    $number_string =  $number;
    $string = '';
    $number = '';
    for($i = 0; $i < strlen($number_string);$i++){
            $number .= $number_string[$i];

        if(ctype_alpha(chr($number)) || is_numeric(chr($number)) ||preg_match('/[\'^£$%&*.()}:{@#~?><>,|=_+¬-]/', chr($number)) || $number == 32) {

            $string .= chr($number);
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

echo convertToString("116104105115321051153297324444443211610111511632444444");
echo "<br>";

echo convertToASCII('this is a ,,, test ,,,');
echo "<br>";


//echo convertToASCII('pola');
echo "<pre>";
echo "</pre>";
