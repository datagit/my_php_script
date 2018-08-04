<?php
/**
 * Created by PhpStorm.
 * User: datdm
 * Date: 8/4/18
 * Time: 3:45 PM
 */

require_once 'load.php';

$repository = new Repository();
echo $repository->getList();