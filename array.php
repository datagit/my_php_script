<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 7/1/18
 * Time: 3:31 PM
 */

$array = [1, 2, 3];
//echo implode(',', $array), "\n";

foreach ($array as &$value) {
    var_dump($value);
}    // by reference
echo implode(',', $array), "\n";

foreach ($array as $value) {
    var_dump($value);
}     // by value (i.e., copy)
//echo implode(',', $array), "\n";