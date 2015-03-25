<?php
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
