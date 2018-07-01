<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 4/14/18
 * Time: 2:42 PM
 */
function mydebug ($obj = null)
{
    if (empty($obj)) {
        $arr = get_defined_vars();
        sort($arr);
        print_r($arr);
        return;
    }
    if (is_array($obj)) {
        print_r($obj);
    } else {
        var_dump($obj);
    }
}