<?php

namespace App;


class SentenceReverse
{

    private static function mb_strrev($str){
        $r = '';
        for ($i = mb_strlen($str); $i>=0; $i--) {
            $r .= mb_substr($str, $i, 1);
        }
        return $r;
    }

    static function mb_ucfirst($text) {
        return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
    }

    public static function reverse(string $data)
    {
        $dataArr = preg_split('/(\.\.\.\s?|[-.?!,;:(){}\[\]\' "]\s?)|\s/', $data,
            -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE);
        $reverseArr = array_map(function ($s) {
            if (strlen(trim($s)) > 1) {
                $reverseWord = self::mb_strrev($s);
                $lowerReverseWord = mb_strtolower($reverseWord);
                if ( $lowerReverseWord !== $reverseWord) $reverseWord = self::mb_ucfirst($lowerReverseWord);
                return $reverseWord;
            }
            return $s;
            }, $dataArr);
        return implode('', $reverseArr);
    }
}