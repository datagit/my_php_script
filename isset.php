<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 7/1/18
 * Time: 3:39 PM
 */
$array = array(
    'a' => true,
    'b' => false, //empty($array['b']) => true
    'c' => 0,//empty($array['b']) => true
    'd' => 1,
    'e' => '',//empty($array['b']) => true
    'f' => "",//empty($array['b']) => true
    'g' => null,//isset($array['g']) => false, //empty($array['b']) => true
    'h' => array(),//empty($array['b']) => true
);
foreach ($array as $value) {
    //var_dump(isset($value));
    var_dump(empty($value));
}

//empty => check data co the dung dc khong
//isset => check key, chu y value bang NULL
