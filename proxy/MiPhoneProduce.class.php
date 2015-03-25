<?php
//生产者  生产手机并为手机定价的厂商
class MiPhoneProduce extends MobilePhone{
    private $price;
    public function getPrice($version){
        $price=4888;
        switch ($version) {
            case '4':
                $price=2288;
                break;
            case '2S':
                $price=1288;
                break;
            default:
                $price=988;
        }
        $this->price=$price;
        return $this->price;
    }
    public function sell($version){
        echo "Produce sell a $version MiPhone with $this->price!\n";
    }
}
