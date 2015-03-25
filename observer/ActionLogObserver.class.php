<?php
//记录日志信息的观察者
class ActionLogObserver implements Observer{
    public function update($subject){
        $order=$subject->getOrder();
        echo "log:id=$order->id\tnickName=$order->nickName\n";
    }
}
