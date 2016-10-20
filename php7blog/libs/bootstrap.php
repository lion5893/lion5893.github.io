<?php

require_once (__DIR__ . '/config.php');
require_once (__DIR__  . '/global.php');

function __autoLoad($className){
    include_once (__DIR__ .  '/' .$className . '.class.php');
}

$db = new Database();