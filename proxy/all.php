<?php
//手机抽象基类
abstract class MobilePhone{
    //通过型号获取手机的价格
    public function getPrice($version){
    }
    //根据型号卖手机
    public function sell($version){
    }
}
//生产者  生产手机并为手机定价的厂商
class IphoneProduce extends MobilePhone{
    private $price;
    public function getPrice($version){
        $price=4888;
        switch ($version) {
            case '6':
                $price=5288;
                break;
            case '6S':
                $price=5588;
                break;
            default:
                $price=4888;
        }
        $this->price=$price;
        return $this->price;
    }
    public function sell($version){
        echo "Produce sell a $version iPhone with $this->price!\n";
    }
}
//生产者  生产手机并为手机定价的厂商
class MiPhoneProduce extends MobilePhone{
    private $price;
    public function getPrice($version){
        $price=4888;
        switch ($version) {
            case '4':
                $price=2288;
                break;
            case '2S':
                $price=1288;
                break;
            default:
                $price=988;
        }
        $this->price=$price;
        return $this->price;
    }
    public function sell($version){
        echo "Produce sell a $version MiPhone with $this->price!\n";
    }
}
//代理商
class ProxyProduce extends MobilePhone{
    private $produce;
    private $price;
    public function getProduce(){
        // 延时加载对象，第一次用的时候才会真正创建
        if(!$this->produce instanceof IphoneProduce){
            $this->produce=new IphoneProduce();
        }
        return $this->produce;
    }
    public function getPrice($version){
        //代理可以在这增加逻辑，需求逻辑变更的时候  比如价格要增加2000，
        $this->price=$this->getProduce()->getPrice($version)+2000;
        return $this->price;
    }
    public function sell($version){
        //逻辑在这
        echo "ProxyProduce sell a $version iPhone with $this->price!\n";
    }
} 
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
//require dirname(__FILE__).'/MobilePhone.class.php';
//require dirname(__FILE__).'/IphoneProduce.class.php';
//require dirname(__FILE__).'/MiPhoneProduce.class.php';
//require dirname(__FILE__).'/ProxyProduce.class.php';
//require dirname(__FILE__).'/DynamicProxy.class.php';
$iphoneProduce=new IphoneProduce();
$price=$iphoneProduce->getPrice('6');
$iphoneProduce->sell('6');
//代理模式 可以加钱
$proxyProduce=new ProxyProduce();
$price=$proxyProduce->getPrice('6S');
$proxyProduce->sell('6S');
//动态代理，可以随时代理iphone或者mi
$miPhoneProduce=new MiPhoneProduce();
$dynamic=new DynamicProxy($miPhoneProduce);
$dynamic->getPrice('4');
$dynamic->sell('4');
$iphoneProduce=new IphoneProduce();
$dynamic=new DynamicProxy($iphoneProduce);
$dynamic->getPrice('6S');
$dynamic->sell('6S');
