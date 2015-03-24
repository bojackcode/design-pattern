<?php
interface Subject{
    public function attach($observer);
    public function detach($observer);
    public function notify();
    public function getOrder();
}

interface Observer{
    public function update($subject);
}
