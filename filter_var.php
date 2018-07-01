<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 4/4/18
 * Time: 7:41 PM
 */

require_once 'mydebug.php';
$data = array(
    'product_id'    => 100,
    'component'     => 'string_component',
    'versions'      => '2.0.33',
    'testscalar'    => array('2', '23', '10', '12'),
    'is_new'        => false,
//    'doesnotexist' => '222',
);

$args = array(
    'product_id'   => FILTER_VALIDATE_INT,
    'component'    => FILTER_SANITIZE_ENCODED,
    'versions'     => FILTER_SANITIZE_ENCODED,
    'doesnotexist' => FILTER_VALIDATE_INT,
    'testscalar'   => array(
        'filter' => FILTER_VALIDATE_INT,
        'flags'  => FILTER_FORCE_ARRAY,
        'options'   => array('min_range' => 1, 'max_range' => 10)
    ),
    'is_new'    => FILTER_VALIDATE_BOOLEAN

);

$myinputs = filter_var_array($data, $args, true);

mydebug($myinputs);
//mydebug( is_numeric($myinputs['product_id']) );
//mydebug();
//$arr = get_defined_vars();
//sort($arr);
//print_r($arr);

$default_options = array('user_name' => 'u1', 'pass' => '123');
$input_options = array('user_name_2' => 'u11', 'pass' => '1231');
print_r(array_replace($default_options, $input_options));