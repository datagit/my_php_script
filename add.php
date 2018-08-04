<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 8/4/18
 * Time: 3:45 PM
 */

require_once 'load.php';

$options = getopt("w:e:");
if (empty($options) || empty($options['w']) || empty($options['e'])) {
    echo sprintf("Please input word and examples with format -w{word} -e{examples}\n");
    die;
}


$w = new Word($options['w'], array($options['e']));

$repository = new Repository();
$repository->add($w);
echo $repository->findByTerm($options['w']);