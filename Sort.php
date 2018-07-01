<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 7/1/18
 * Time: 2:22 PM
 */

class Sort
{
    public function cmp($a , $b)
    {
        if ($a['condition_1'] == $b['condition_1']) {
            return $a['condition_2'] > $b['condition_2'] ? 1 : -1;
        }
        return $a['condition_1'] > $b['condition_1'] ? 1 : -1;
    }
    public function do()
    {
        $data = array(
            array(
                'id' => 1,
                'name' => 'name 01',
                'condition_1' => 10,
                'condition_2' => 11,

            ),array(
                'id' => 2,
                'name' => 'name 02',
                'condition_1' => 10,
                'condition_2' => 21,

            ),array(
                'id' => 3,
                'name' => 'name 03',
                'condition_1' => 30,
                'condition_2' => 31,

            ),array(
                'id' => 4,
                'name' => 'name 04',
                'condition_1' => 5,
                'condition_2' => 41,

            ),
        );
        shuffle($data);
        //print_r($data);
        usort($data, array('Sort','cmp'));
        print_r($data);
    }
}

$s = new Sort();
$s->do();