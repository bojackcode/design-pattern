<?php
interface IMarkComponent{
    public function add($component);
    public function remove($component);
    public function getName();
    public function getUrl();
    public function display();
}
