<?php
require_once dirname(__FILE__).'/IBuilder.class.php';
require_once dirname(__FILE__).'/SmallBuilder.class.php';
require_once dirname(__FILE__).'/BigBuilder.class.php';
require_once dirname(__FILE__).'/House.class.php';
require_once dirname(__FILE__).'/Director.class.php';
$big=new BigBuilder(); //选择大房子
$director=new Director($big);//建造
$house=$big->getHouse();//建造好了之后 返回house
$house->show(); 

