<?php
//单例模式，同一个uid只有一个instance
class Singleton{
    private static $instance=array(); //保存所有的单个instance
    private $uid;
    private function __construct($uid){
        $this->uid=$uid;
    }
    public function test(){
        echo "I'am $this->uid\n";
    }
    public static function getInstance($uid){
        if(!self::$instance || is_null(self::$instance[$uid])){
            self::$instance[$uid]=new self($uid);
        }
        return self::$instance[$uid];
    }
    //防止对象clone一个完全独立的intacne 赋值是reference无所谓
    private function __clone(){
        die('how dare u');
    }
}
$singleton1=Singleton::getInstance(1);
$singleton2=Singleton::getInstance(2);
$singleton1->test();
$singleton2->test();
