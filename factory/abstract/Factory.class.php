<?php
interface Factory{
    public function getPhone();
    public function getHeadphones();
}
class Factory5s implements Factory{
    public function getPhone(){
        return new Iphone5s();
    }
    public function getHeadphones(){
        return new HeadphonesSony();
    }
}
class Factory6 implements Factory{
    public function getPhone(){
        return new Iphone6();
    }
    public function getHeadphones(){
        return new HeadphonesBeats();
    }
}
