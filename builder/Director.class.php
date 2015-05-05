<?php
class Director{
    public function __construct($build){
        $build->buildType();
        $build->buildColor();
    }
}
