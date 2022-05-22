<?php

namespace App;

class Strings
{
    public function exampleStrRepeat($string, $t)
    {
        $result = str_repeat($string , $t);
        return $result;
    }


    public function concatenate($string, $string1)
    {
        return $string. $string1;
    }

    public function explodeAndReverse($string)
    {
//1. строку в массив
//2. перевернуть массив
//3. вернуть массив
        $a = explode(',',$string);
        $a = array_reverse($a);
        return $a;
    }

    public function implodeString(array $array)
    {
        str($array);
        explode(',',$array);
        var_dump(implode(',', $array));
        return $array
            ;
    }

    public function replaceString($text, $replacement) {
        $text = str_replace("%numberOfSushek%", "15", "У маши были %numberOfSushek% сушек");
        return $text;
    }

    public function findXWithRegex($str) {
        return '';
    }
}
