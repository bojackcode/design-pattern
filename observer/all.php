<?php
//抽象主题类，被观察者
//子类必须实现所有方法
interface Subject{
    //增加一个观察者对象
    public function attach($observer);
    //删除一个观察者对象
    public function detach($observer);
    //通知所有的观察者对象
    public function notify();
    //获取实际观察者的信息 比如订单具体信息
    public function getOrder();
}
//抽象观察者
interface Observer{
    //感知到被观察折发生变化，做相应的逻辑操作。
    public function update($subject);
}
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
//订单主题类，保存订单详情，通知可以存储观察者信息，订单完成会通知所有观察者
class OrderSubject implements Subject{
    private $observers;
    private $order;
    public function __construct($order){
        $this->order=$order;
        $this->observers=array();
    }
    public function attach($observer){
        $this->observers[]=$observer;
        return TRUE;
    }
    public function detach($observer){
        $index=array_search($observer,$this->observers);
        if($index===FALSE || !array_key_exists($index,$this->observers)){
            return FALSE;
        }
        unset($this->observers[$index]);
        return TRUE;
    }
    public function notify(){
        foreach($this->observers as $observer){
            $observer->update($this);
        }
    }
    public function getOrder(){
        return $this->order;
    }
}
//发送短信的观察者类
class SendSmsObserver implements Observer{
    public function update($subject){
        $order=$subject->getOrder();
        //vip的短信可能和普通用户的不一样
        echo "nickName=$order->nickName:orderNumber is $order->id take;\n";
    }
}
//记录日志信息的观察者
class ActionLogObserver implements Observer{
    public function update($subject){
        $order=$subject->getOrder();
        echo "log:id=$order->id\tnickName=$order->nickName\n";
    }
}
//require dirname(__FILE__).'/interfaces.php';
//require dirname(__FILE__).'/Order.class.php';
//require dirname(__FILE__).'/OrderSubject.class.php';
//require dirname(__FILE__).'/ActionLogObserver.class.php';
//require dirname(__FILE__).'/SendSmsObserver.class.php';
$order=new Order();
$subject=new OrderSubject($order);
$log=new ActionLogObserver();
$sms=new SendSmsObserver();
$subject->attach($log);
$subject->attach($sms);
$subject->detach($log);
$subject->notify();
