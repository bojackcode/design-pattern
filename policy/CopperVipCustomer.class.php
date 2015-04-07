<?php
class CopperVipCustomer implements IStrategy{
    public function getPrice($goods){
        echo "hi $goods->userName, 该商品打8折.\n";
        return $goods->price*0.8;
    }
}
