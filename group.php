<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 7/1/18
 * Time: 3:56 PM
 */
$data = array(
    array('id' => 1,
        'pid' => 10,
        'v2' => 'a',
        ),
    array('id' => 2,
        'pid' => 10,
        'v2' => 'b',
    ),
    array('id' => 3,
        'pid' => 20,
        'v2' => 'a',
    ),
    array('id' => 4,
        'pid' => 30,
        'v2' => 'b',
    ),
    array('id' => 5,
        'pid' => 30,
        'v2' => 'b',
    ),
);
shuffle($data);
$group = array();
foreach ($data as $value) {
    $group[$value['pid']][] = $value;
}
print_r($group);