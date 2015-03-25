<?php
require dirname(__FILE__).'/MobilePhone.class.php';
require dirname(__FILE__).'/IphoneProduce.class.php';
require dirname(__FILE__).'/MiPhoneProduce.class.php';
require dirname(__FILE__).'/ProxyProduce.class.php';
require dirname(__FILE__).'/DynamicProxy.class.php';
$iphoneProduce=new IphoneProduce();
$price=$iphoneProduce->getPrice('6');
$iphoneProduce->sell('6');
//代理模式 可以加钱
$proxyProduce=new ProxyProduce();
$price=$proxyProduce->getPrice('6S');
$proxyProduce->sell('6S');
//动态代理，可以随时代理iphone或者mi
$miPhoneProduce=new MiPhoneProduce();
$dynamic=new DynamicProxy($miPhoneProduce);
$dynamic->getPrice('4');
$dynamic->sell('4');
$iphoneProduce=new IphoneProduce();
$dynamic=new DynamicProxy($iphoneProduce);
$dynamic->getPrice('6S');
$dynamic->sell('6S');
