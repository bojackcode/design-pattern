<?php
interface IMarkComponent{
    public function add($component);
    public function remove($component);
    public function getName();
    public function getUrl();
    public function display();
}
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
$douban=new Mark('douban','www.douban.com');
$liangbopirates=new Mark('liangbopirates','liangbopirates.github.io');
$ganji=new Mark('ganji','www.ganji.com');
$google=new Mark('google','www.google.com');
$all=new MarkFolder('all');
$loveFolder=new MarkFolder('love');
$ganjiFolder=new MarkFolder('ganji');
$loveFolder->add($douban);
$loveFolder->add($liangbopirates);
$ganjiFolder->add($ganji);
$all->add($loveFolder);
$all->add($ganjiFolder);
$all->add($google);
$all->display();
