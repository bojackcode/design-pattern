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
abstract class Headphones{
    public function __construct(){
    }
}
class HeadphonesSony extends Headphones{
    public function __construct(){
        echo "I'am HeadphonesSony\n";
    }
}
class HeadphonesBeats extends Headphones{
    public function __construct(){
        echo "I'am HeadphonesBeats\n";
    }
}
interface Factory{
    public function getPhone();
    public function getHeadphones();
}
class Factory5s implements Factory{
    public function getPhone(){
        return new Iphone5s();
    }
    public function getHeadphones(){
        return new HeadphonesSony();
    }
}
class Factory6 implements Factory{
    public function getPhone(){
        return new Iphone6();
    }
    public function getHeadphones(){
        return new HeadphonesBeats();
    }
}
//require_once dirname(__FILE__).'/Iphone.class.php';
//require_once dirname(__FILE__).'/Headphones.class.php';
//require_once dirname(__FILE__).'/Factory.class.php';
$phone=new Factory5s();
$phone->getPhone();
$phone->getHeadphones();
$type='6';
$class=new ReflectionClass('Factory'.$type);
$intance=$class->newInstance();
$intance->getPhone();
$intance->getHeadphones();
