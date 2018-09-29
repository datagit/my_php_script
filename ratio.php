<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 9/29/18
 * Time: 4:41 PM
 */
$re = '/(?<sheet_id>\d+).(?<position>\d+):(?<percent>\d+)/m';
$str = '1.1:110,1.2:150';
//$str = '1:80,2:20';
//$str = '1:80';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

if (empty($matches)) {
    return false;
}
$templates = array();
$sum_percent = 0;
$positions = array();
foreach ($matches as $values) {
    $values['percent'] = $values['percent'] % 100;
    $sum_percent += $values['percent'];
    $templates[] = array(
        'sheet_id' => $values['sheet_id'],
        'position' => $values['position'],
        'percent' => $values['percent'],
    );
    $positions[] = $values['position'];
}
print_r($templates);

$key_value = '';
$sum_ratio = 0;
$random_ratio = mt_rand(1,100);
echo "sum_percent = $sum_percent\n";
echo "random_ratio = $random_ratio\n";
foreach ($templates as $template) {
    $sum_ratio += $template['percent'];
    if ($random_ratio <= $sum_ratio) {
        $key_value = $template['position'];
        break;
    }
}
if (!empty($key_value)) {
    echo "1. pick from random $key_value\n";
}

if (empty($key_value)) {
    //3,4,5,6,7,8,9,10
    $default_positions = range(1,10);
    $positions = array_diff($default_positions, $positions);
    $positions = array_values($positions);
    $key_value = $positions[array_rand($positions)];

    echo "2. pick from random $key_value\n";
}
