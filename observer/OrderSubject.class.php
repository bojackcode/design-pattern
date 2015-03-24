<?php
class OrderSubject implements Subject{
    private $observers;
    private $order;
    public function __construct($order){
        $this->order=$order;
        $this->observers=array();
    }
    public function attach($observer){
        $this->observers[]=$observer;
        return TRUE;
    }
    public function detach($observer){
        $index=array_search($observer,$this->observers);
        if($index===FALSE || !array_key_exists($index,$this->observers)){
            return FALSE;
        }
        unset($this->observers[$index]);
        return TRUE;
    }
    public function notify(){
        foreach($this->observers as $observer){
            $observer->update($this);
        }
    }
    public function getOrder(){
        return $this->order;
    }
}
