<?php
class Factory{
    public static function getPhone($type){
        switch($type){
        case '5s':
            return new Iphone5s();
        case '6':
            return new Iphone6();
        default:
            return new Iphone5s();
        }
    }
}
