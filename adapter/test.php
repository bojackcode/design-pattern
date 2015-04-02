<?php
require_once dirname(__FILE__).'/ITarget.class.php';
require_once dirname(__FILE__).'/Adaptee.class.php';
require_once dirname(__FILE__).'/Adapte.class.php';
$adaptee=new Adaptee();
$adapte=new Adapte($adaptee);
$adapte->getDiscount();
