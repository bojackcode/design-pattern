<?php
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
