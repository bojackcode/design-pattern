<?php
interface IStrategy{
    public function getPrice($goods);
}
class SilverVipCustomer implements IStrategy{
    public function getPrice($goods){
        echo "dear $goods->userName, 该商品打7折.\n";
        return $goods->price*0.7;
    }
}
class CopperVipCustomer implements IStrategy{
    public function getPrice($goods){
        echo "hi $goods->userName, 该商品打8折.\n";
        return $goods->price*0.8;
    }
}
class NormalCustomer implements IStrategy{
    public function getPrice($goods){
        echo "sorry,$goods->userName, 该商品不打折.\n";
        return $goods->price;
    }
}
class Price{
    private $strategy;
    public $userName;
    public $price;
    public function __construct($userName,$price,$strategy){
        $this->userName=$userName;
        $this->price=$price;
        $this->strategy=$strategy;
    }
    public function getPrice(){
        return $this->strategy->getPrice($this);
    }

}
$strategy=new SilverVipCustomer();
$goods=new Price('liangbopirates',2000,$strategy);
$price=$goods->getPrice();
$strategy=new NormalCustomer();
$goods=new Price('liangbopirates',1000,$strategy);
$price=$goods->getPrice();
