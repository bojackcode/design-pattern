<?php
abstract class Headphones{
    public function __construct(){
    }
}
class HeadphonesSony extends Headphones{
    public function __construct(){
        echo "I'am HeadphonesSony\n";
    }
}
class HeadphonesBeats extends Headphones{
    public function __construct(){
        echo "I'am HeadphonesBeats\n";
    }
}
