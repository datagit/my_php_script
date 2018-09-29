<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 9/29/18
 * Time: 4:41 PM
 */
$re = '/(?<index>\d+):(?<percentage>\d+)/m';
//$str = '1:80,2:20';
$str = '1:80';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

if (empty($matches)) {
    return false;
}
$templates = array();
$sum_percentage = 0;
foreach ($matches as $values) {
    $sum_percentage += $values['percentage'];
    $templates[] = array(
        'index' => $values['index'],
        'percentage' => $values['percentage'],
    );
}
print_r($templates);

if ($sum_percentage > 100) {
    return false;
}

$key_value = '';
$sum_ratio = 0;
$random_ratio = mt_rand(1,100);
echo "sum_percentage = $sum_percentage\n";
echo "random_ratio = $random_ratio\n";
if ($sum_percentage == 100) {
    //$str = '1:80,2:20';
    foreach ($templates as $template) {
        $sum_ratio += $template['percentage'];
        if ($random_ratio <= $sum_ratio) {
            $key_value = $template['index'];
            break;
        }
    }
} else {

    //$str = '1:50,2:20';
    //$sum_percentage == 70
    foreach ($templates as $template) {
        $sum_ratio += $template['percentage'];
        if ($random_ratio <= $sum_ratio) {
            $key_value = $template['index'];
            break;
        }
    }
    if ($random_ratio > $sum_percentage) {
        //3,4,5,6,7,8,9,10
        $key_value = mt_rand(3,10);
    }
}
var_dump($key_value);
echo "pick from random $key_value\n";