<?php
class SmallBuilder implements IBuilder{
    private $house;
    public function __construct(){
        $this->house=new House();
    }
    public function buildType(){
        $this->house->setType('small');
    }
    public function buildColor(){
        $this->house->setColor('blue');
    }
    public function getHouse(){
        return $this->house;
    }
}
