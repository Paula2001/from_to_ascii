<?php
/**
 * Author : Paula George
 *
 * Subject : This library converts from text to ASCII and the opposite not a big deal ;)
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
            if(ctype_alpha(chr($ascii_number)) || is_numeric(chr($ascii_number)) ||preg_match('/[\'^£$%&*.()}":{@#~?>\/<>,|=_+¬-]/', chr($ascii_number)) || $ascii_number == 32) {
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


echo "The Ascii number : ". Ascii::convertToString("609732104114101102613410511010010112046112104112346211610111511660479762");

echo "<br>";

echo "The text : ".Ascii::convertToASCII('<a href="index.php">test</a>');

