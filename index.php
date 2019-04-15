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

echo convertToString("89111117114321191019811510511610132105115321161011091121111149711412132100111119110321151051109910132121111117321049711810132118105111108971161011003297321071011213299111110100105116105111110321111023211111711432991111101161149799116329711010032116114971101151021011141141011003212111111711432119101981151051161013211611132971101111161041011143211510111411810111432448010810197115101329911111011697991163277117989711510410111432731101021113284101991043269109971051083258321001001001006410010046991111093211210411111010132583248495049525653495649321161113211410110397105110329799991011151153211611132121111117114321191019811510511610132841049711010711532102111114321211111171143211711010010111411511697110100105110103");
echo "<br>";

echo convertToASCII('Your website is temporary down since you have violated a key condition of our contract and transferred your website to another server ,Please contact Mubasher Info Tech Email : dddd@dd.com phone : 0121485181 to regain access to your website Thanks for your understanding');
echo "<br>";


//echo convertToASCII('pola');
echo "<pre>";
echo "</pre>";
