<?php
require_once dirname(__FILE__).'/Iphone.class.php';
require_once dirname(__FILE__).'/Headphones.class.php';
require_once dirname(__FILE__).'/Factory.class.php';
$phone=new Factory5s();
$phone->getPhone();
$phone->getHeadphones();
$type='6';
$class=new ReflectionClass('Factory'.$type);
$intance=$class->newInstance();
$intance->getPhone();
$intance->getHeadphones();
