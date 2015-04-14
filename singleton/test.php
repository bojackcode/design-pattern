<?php
require_once dirname(__FILE__).'/Singleton.class.php';
$singleton1=Singleton::getInstance(1);
$singleton2=Singleton::getInstance(2);
$singleton1->test();
$singleton2->test();
