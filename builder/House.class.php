<?php
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

