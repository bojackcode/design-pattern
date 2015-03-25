<?php
//生产者  生产手机并为手机定价的厂商
class IphoneProduce extends MobilePhone{
    private $price;
    public function getPrice($version){
        $price=4888;
        switch ($version) {
            case '6':
                $price=5288;
                break;
            case '6S':
                $price=5588;
                break;
            default:
                $price=4888;
        }
        $this->price=$price;
        return $this->price;
    }
    public function sell($version){
        echo "Produce sell a $version iPhone with $this->price!\n";
    }
}
