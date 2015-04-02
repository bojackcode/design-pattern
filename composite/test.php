<?php
require_once dirname(__FILE__).'/IMarkComponent.class.php';
require_once dirname(__FILE__).'/MarkFolder.class.php';
require_once dirname(__FILE__).'/Mark.class.php';
$douban=new Mark('douban','www.douban.com');
$liangbopirates=new Mark('liangbopirates','liangbopirates.github.io');
$ganji=new Mark('ganji','www.ganji.com');
$google=new Mark('google','www.google.com');
$all=new MarkFolder('all');
$loveFolder=new MarkFolder('love');
$ganjiFolder=new MarkFolder('ganji');
$loveFolder->add($douban);
$loveFolder->add($liangbopirates);
$ganjiFolder->add($ganji);
$all->add($loveFolder);
$all->add($ganjiFolder);
$all->add($google);
$all->display();
