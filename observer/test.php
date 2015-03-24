<?php
require dirname(__FILE__).'/interfaces.php';
require dirname(__FILE__).'/Order.class.php';
require dirname(__FILE__).'/OrderSubject.class.php';
require dirname(__FILE__).'/ActionLogObserver.class.php';
require dirname(__FILE__).'/sendSmsObserver.class.php';
$order=new Order();
$subject=new OrderSubject($order);
$log=new ActionLogObserver();
$sms=new sendSmsObserver();
$subject->attach($log);
$subject->attach($sms);
$subject->notify();
