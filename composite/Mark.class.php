<?php
class Mark implements IMarkComponent{
    private $name;
    private $url;
    public function __construct($name,$url){
        $this->name=$name;
        $this->url=$url;
    }
    public function add($component){
        return FALSE;
    }
    public function remove($component){
        return FALSE;
    }
    public function getName(){
        return $this->name;
    }
    public function getUrl(){
        return $this->url;
    }
    public function display(){
        echo "name:$this->name\turl:$this->url\n";
    }
}
