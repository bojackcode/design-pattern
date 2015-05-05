<?php
interface IPrototype{
    public function copy();
}

class Employee implements IPrototype{
    private $name;
    private $salary;
    public function __construct($name,$salary){
        $this->name=$name;
        $this->salary=$salary;
    }
    public function getName(){
        return $this->name;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary=$salary;
    }
    public function copy(){
        //return clone $this; 浅拷贝
        $obj=serialize($this);
        return unserialize($obj); //深拷贝
    }
    public function display(){
        echo "$this->name has $this->salary\n";
    }
}
$liangbopirates=new Employee('liangbopirates',1000000);
$copy=$liangbopirates->copy();
$liangbopirates->display();
$copy->display();
$liangbopirates->setSalary(800);
$liangbopirates->display();
$copy->display();
