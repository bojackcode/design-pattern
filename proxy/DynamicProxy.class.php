<?php
//动态代理
class DynamicProxy{
    public function __construct($produce){
        $this->produce=$produce;
    }
    public function __call($name,$args){
        //$args 是一个数组
        //这里也可以加上逻辑，小米的手机加多少钱，iphone加多少钱
        return call_user_func_array(array($this->produce,$name),$args);
    }
}
