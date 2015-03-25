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
