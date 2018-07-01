<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 7/1/18
 * Time: 2:22 PM
 */

class Sort3
{
    public function cmp($a , $b)
    {
        if ($a['condition_1'] == $b['condition_1'] && $a['condition_2'] == $b['condition_2']) {
            return $a['condition_3'] > $b['condition_3'] ? 1 : -1;
        } elseif ($a['condition_1'] == $b['condition_1'] && $a['condition_2'] != $b['condition_2']){
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
                'condition_3' => 12,

            ),array(
                'id' => 2,
                'name' => 'name 02',
                'condition_1' => 10,
                'condition_2' => 11,
                'condition_3' => 21,

            ),array(
                'id' => 3,
                'name' => 'name 03',
                'condition_1' => 30,
                'condition_2' => 31,
                'condition_3' => 31,

            ),array(
                'id' => 4,
                'name' => 'name 04',
                'condition_1' => 5,
                'condition_2' => 41,
                'condition_3' => 41,

            ),
            array(
                'id' => 5,
                'name' => 'name 05',
                'condition_1' => 5,
                'condition_2' => 41,
                'condition_3' => 50,

            ),
            array(
                'id' => 6,
                'name' => 'name 06',
                'condition_1' => 30,
                'condition_2' => 31,
                'condition_3' => 60,

            ),
        );
        shuffle($data);
        //print_r($data);
        usort($data, array('Sort3','cmp'));
        print_r($data);
    }
}

$s = new Sort3();
$s->do();