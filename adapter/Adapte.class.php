<?php
class Adapte implements ITarget {
    private $adaptee;
    public function __construct($adaptee){
        $this->adaptee=$adaptee;
    }
    public function getDiscount(){
        $vip=0;
        $this->adaptee->getDiscountByVip($vip);
    }
}
