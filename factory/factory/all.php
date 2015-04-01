<?php
abstract class Iphone{
    public function __construct(){
    }
}
class Iphone5s extends Iphone{
    public function __construct(){
        echo "I'am 5s\n";
    }
}
class Iphone6 extends Iphone{
    public function __construct(){
        echo "I'am 6\n";
    }
}
interface Factory{
    public function getPhone();
}
class Factory5s implements Factory{
    public function getPhone(){
        return new Iphone5s();
    }
}
class Factory6 implements Factory{
    public function getPhone(){
        return new Iphone6();
    }
}
//require_once dirname(__FILE__).'/Iphone.class.php';
//require_once dirname(__FILE__).'/Factory.class.php';
$phone=new Factory5s();
$phone->getPhone();
$phone=new Factory6();
$phone->getPhone();
$type='6';
$class=new ReflectionClass('Factory'.$type);
$intance=$class->newInstance();
$intance->getPhone();
