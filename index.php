<?php
/**
 * Author : Paula George
 *
 * Subject : This library converts from and to ASCII not a big deal ;)
 *
 * Date : 4/15/2019
 */
setlocale(LC_ALL,"US");
class Ascii{
    /**
     * @param string  $ascii_number
     *
     * This function convert from ascii to string also creates
     *
     * @return string
     */
    public static function convertToString($ascii_number){
        $num =  $ascii_number;
        $string = '';
        $ascii_number = '';
        for($i = 0; $i < strlen($num);$i++){
            $ascii_number .= $num[$i];
            if(ctype_alpha(chr($ascii_number)) || is_numeric(chr($ascii_number)) ||preg_match('/[\'^£$%&*.()}:{@#~?><>,|=_+¬-]/', chr($ascii_number)) || $ascii_number == 32) {
                $string .= chr($ascii_number);
                $ascii_number = '';
            }
        }
        return $string;
    }

    /**
     * @param $string
     *
     * This function convert from text to ascii numbers
     *
     * @return string
     */
    public static function convertToASCII($string){
        $ascii_number = '';
        for($i = 0;$i < strlen($string);$i++){
            $ascii_number .= ord($string[$i]);
        }
        return $ascii_number ;
    }
}


echo Ascii::convertToString("104971181013297321101059910132100971213280971171089732711011111141031013258683246");
echo "<br>";

echo Ascii::convertToASCII('have a nice day Paula George :D .');
echo "<br>";

