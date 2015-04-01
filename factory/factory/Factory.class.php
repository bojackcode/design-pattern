<?php
interface Factory{
    public function getPhone();
}
class Factory5s implements Factory{
    public function getPhone(){
        return new Iphone5s();
    }
}
class Factory6 implements Factory{
    public function getPhone(){
        return new Iphone6();
    }
}
