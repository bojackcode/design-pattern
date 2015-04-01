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
class Factory{
    public static function getPhone($type){
        switch($type){
        case '5s':
            return new Iphone5s();
        case '6':
            return new Iphone6();
        default:
            return new Iphone5s();
        }
    }
}
//require_once dirname(__FILE__).'/Iphone.class.php';
//require_once dirname(__FILE__).'/Factory.class.php';
$type='5s';
$phone=Factory::getPhone($type);
$type='6';
$phone=Factory::getPhone($type);
