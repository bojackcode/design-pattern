<?php
require_once dirname(__FILE__).'/IPrototype.class.php';
require_once dirname(__FILE__).'/Employee.class.php';
$liangbopirates=new Employee('liangbopirates',1000000);
$copy=$liangbopirates->copy();
$liangbopirates->display();
$copy->display();
$liangbopirates->setSalary(800);
$liangbopirates->display();
$copy->display();
