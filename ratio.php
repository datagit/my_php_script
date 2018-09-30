<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 9/29/18
 * Time: 4:41 PM
 */

main();

function main() {
    $pattern = '/(?<sheet_id>\d+).(?<position>\d+):(?<percent>\d+)/m';
    $str = '1.1:10,1.2:50';
    //$str = '1:80,2:20';
    //$str = '1:80';
    $result = parseInput($pattern, $str);
    if (empty($result)) {
        return;
    }
    list($data_user_input, $positions) = $result;
    $random_ratio = mt_rand(1,100);
    $value = pickByPercent($random_ratio, $data_user_input);
    if (empty($value)) {
        $default = generateDefault();
        $positions = array_diff($default, $positions);
        if (!empty($positions)) {
            $value = pickByArray($positions);
        }
    }
    return $value;
}

function parseInput($pattern, $str) {
    preg_match_all($pattern, $str, $matches, PREG_SET_ORDER, 0);
    if (empty($matches)) {
        return false;
    }
    $data_user_input = array();
    $sum_percent = 0;
    $positions = array();
    foreach ($matches as $values) {
        $values['percent'] = abs($values['percent']);
        $values['percent'] = ($values['percent'] >= 100) ? 100 : $values['percent'] % 100;
        $sum_percent += $values['percent'];
        $data_user_input[] = array(
            'sheet_id' => $values['sheet_id'],
            'position' => $values['position'],
            'percent' => $values['percent'],
        );
        $positions[] = $values['position'];
    }
    return array($data_user_input, $positions);
}

function pickByPercent($random_ratio, $percents) {
    $sum_ratio = 0;
    $position = '';
    echo "random ratio $random_ratio\n";
    foreach ($percents as $template) {
        $sum_ratio += $template['percent'];
        if ($random_ratio <= $sum_ratio) {
            $position = $template['position'];
            echo "1. pick from random $position\n";
            break;
        }
    }
    echo "sum ratio $sum_ratio\n";
    return $position;
}

function pickByArray($positions) {
    $positions = array_values($positions);
    $position = $positions[array_rand($positions)];
    echo "2. pick from random $position\n";
    return $position;
}

function generateDefault() {
    return range(1,10);
}