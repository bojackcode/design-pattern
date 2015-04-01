<?php
require_once dirname(__FILE__).'/Iphone.class.php';
require_once dirname(__FILE__).'/Factory.class.php';
$phone=new Factory5s();
$phone->getPhone();
$phone=new Factory6();
$phone->getPhone();
$type='6';
$class=new ReflectionClass('Factory'.$type);
$intance=$class->newInstance();
$intance->getPhone();
