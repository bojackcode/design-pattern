<?php
require_once dirname(__FILE__).'/Iphone.class.php';
require_once dirname(__FILE__).'/Factory.class.php';
$type='5s';
$phone=Factory::getPhone($type);
$type='6';
$phone=Factory::getPhone($type);
