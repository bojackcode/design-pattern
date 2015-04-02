<?php
class MarkFolder implements IMarkComponent{
    private $marks;
    private $name;
    public function __construct($name){
        $this->name=$name;
        $this->marks=array();
    }
    public function add($component){
        $this->marks[$component->getName()]=$component;
    }
    public function remove($component){
        if(isset($this->marks[$component->getName])){
            unset($this->marks[$component->getName]);
        }
    }
    public function getName(){
        return $this->name;
    }
    public function getUrl(){
        return FALSE;
    }
    public function display(){
        echo "--$this->name--\n";
        foreach($this->marks as $mark){
            $mark->display();
        }
        echo "--done--\n";
    }
}
