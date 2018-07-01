<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 7/1/18
 * Time: 4:12 PM
 */

//ini_set('display_errors', 'On'); error_reporting(E_ALL);
$data = range(1, 100);
echo '<pre>';var_dump( json_encode($data));echo '</pre>';
echo '----';
$text = range('a', 'z');
var_dump( json_encode($text));