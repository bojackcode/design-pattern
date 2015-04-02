<?php
class Adaptee{
    public function getDiscountByVip($vip=0){
        if(!$vip){
            echo "9.9 dis\n";
        }
    }
}
