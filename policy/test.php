<?php
require_once dirname(__FILE__).'/IStrategy.class.php';
require_once dirname(__FILE__).'/SilverVipCustomer.class.php';
require_once dirname(__FILE__).'/CopperVipCustomer.class.php';
require_once dirname(__FILE__).'/NormalCustomer.class.php';
require_once dirname(__FILE__).'/Price.class.php';
$strategy=new SilverVipCustomer();
$goods=new Price('liangbopirates',2000,$strategy);
$price=$goods->getPrice();
$strategy=new NormalCustomer();
$goods=new Price('liangbopirates',1000,$strategy);
$price=$goods->getPrice();
