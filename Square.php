<?php

include_once ('Rectangle.php');

class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
        $this->height = $width;
    }
    public function howToColor(){
        echo "Color all four sides.";
    }
}