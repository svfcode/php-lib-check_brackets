<?php

require_once __DIR__ . '/../vendor/autoload.php';

use SVFCode\CheckBrackets\CheckBracketsClass;


$str1 = "()";
$str2 = "())";
$str3 = "(1,2)";
//$str4 = "(a,1,2)";

$result1 = CheckBracketsClass::checkBrackets($str1);
$result2 = CheckBracketsClass::checkBrackets($str2);
$result3 = CheckBracketsClass::checkBrackets($str3);
//$result4 = CheckBracketsClass::checkBrackets($str4);

var_dump($result1);
var_dump($result2);
var_dump($result3);
//var_dump($result4); //> throw InvalidArgumentException
