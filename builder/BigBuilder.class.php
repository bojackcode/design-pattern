<?php
class BigBuilder implements IBuilder{
    private $house;
    public function __construct(){
        $this->house=new House();
    }
    public function buildType(){
        $this->house->setType('big');
    }
    public function buildColor(){
        $this->house->setColor('white');
    }
    public function getHouse(){
        return $this->house;
    }
}
