<?php
interface IBuilder{
    public function buildType();
    public function buildColor();
    public function getHouse();
}

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
//房子类 只有颜色和户型字段
class House{
    private $type;
    private $color;
    public function setType($type){
        $this->type=$type;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function getType(){
        return $this->type;
    }
    public function getColor(){
        return $this->color;
    }
    public function show(){
        echo "I'am $this->color and $this->type house\n";
    }
}

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
class Director{
    public function __construct($build){
        $build->buildType();
        $build->buildColor();
    }
}

$big=new BigBuilder(); //选择大房子
$director=new Director($big);//建造
$house=$big->getHouse();//建造好了之后 返回house
$house->show(); 

