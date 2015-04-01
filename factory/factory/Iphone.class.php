<?php
abstract class Iphone{
    public function __construct(){
    }
}
class Iphone5s extends Iphone{
    public function __construct(){
        echo "I'am 5s\n";
    }
}
class Iphone6 extends Iphone{
    public function __construct(){
        echo "I'am 6\n";
    }
}
