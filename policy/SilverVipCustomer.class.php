<?php
class SilverVipCustomer implements IStrategy{
    public function getPrice($goods){
        echo "dear $goods->userName, 该商品打7折.\n";
        return $goods->price*0.7;
    }
}
