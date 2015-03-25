<?php
//订单类 主要记录订单详情，为观察者类提供信息
class Order{
    private $id;
    private $userId;
    private $nickName;
    private $price;
    private $orderTime;
    public function __construct(){
        $this->id=rand();
        $this->nickName='liangbopirates';
    }
    public function __set($name,$value){
        $setter='set'.$name;
        if(method_exists($this,$setter)){
            return $this->$setter($value);
        }
    }
    public function __get($name){
        $getter='get'.$name;
        if(method_exists($this,$getter)){
            return $this->$getter();
        }
    }
    public function getId(){
        return $this->id;
    }
    public function setId($value){
        $this->id=$value;
    }
    public function getNickName(){
        return $this->nickName;
    }
    public function setNickName($value){
        $this->nickName=$value;
    }
}
