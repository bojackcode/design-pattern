<?php
interface ITarget{
    public function getDiscount();
}

class Adaptee{
    public function getDiscountByVip($vip=0){
        if(!$vip){
            echo "9.9 dis\n";
        }
    }
}

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
$adaptee=new Adaptee();
$adapte=new Adapte($adaptee);
$adapte->getDiscount();
