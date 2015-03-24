<?php
class sendSmsObserver implements Observer{
    public function update($subject){
        $order=$subject->getOrder();
        //vip的短信可能和普通用户的不一样
        echo "nickName=$order->nickName:orderNumber is $order->id take;\n";
    }
}
