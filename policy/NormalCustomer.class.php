<?php
class NormalCustomer implements IStrategy{
    public function getPrice($goods){
        echo "sorry,$goods->userName, 该商品不打折.\n";
        return $goods->price;
    }
}
