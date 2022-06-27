<?php

namespace SVFCode\CheckBrackets;


class CheckBracketsClass
{
    /**
     * Check string for has correct open and close brackets
     *
     * @param string $str
     * @return bool
     */
    public static function checkBrackets(string $str): bool
    {
        if(!self::checkString($str)) {
            throw new \InvalidArgumentException('not valid string');
        }

        $leftBrackets = 0;
        $rightBrackets = 0;
        $str = str_split($str);
        for($i = 0; $i < count($str); $i++) {
            if($str[$i] == '(') $leftBrackets++;
            if($str[$i] == ')') {
                $rightBrackets++;

                if($leftBrackets < $rightBrackets) {
                    return false;
                }
            }
        }

        if($leftBrackets != $rightBrackets) {
            return false;
        }

        return true;
    }

    /**
     * Check string contains allowed symbols
     *
     * @param string $str
     * @return bool
     */
    private static function checkString(string $str): bool
    {
        preg_match('/([^,()\d\s\t\r\n])/', $str, $matches);

        if(count($matches) > 0) {
            return false;
        }

        return true;
    }
}