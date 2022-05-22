<?php

namespace App;

class Strings
{
    public function exampleStrRepeat($string, $t)
    {
        $result = str_repeat($string, $t);

        return $result;
    }


    public function concatenate($string, $string1)
    {
        return $string.$string1;
    }

    public function explodeAndReverse($string)
    {
        //1. строку в массив
        //2. перевернуть массив
        //3. вернуть массив
        $a = explode(',', $string);
        $a = array_reverse($a);

        return $a;
    }

    public function implodeString(array $array)
    {
        $result = implode('', $array);

        return $result;
    }

    public function replaceString($text, $replacement)
    {
        $text = str_replace("%numberOfSushek%", $replacement, $text);

        return $text;
    }

    public function findXWithRegex($str)
    {
        $matches = null;

        preg_match_all('/x=([0-9a-z]+)/', $str, $matches);

        return $matches[1][0];
    }
}
