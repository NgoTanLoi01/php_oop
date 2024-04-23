<?php
require_once __DIR__ . '/../Constant.php';


class Circle
{
    public function getAreaCicle($radius)
    {
        return Constant::PI * $radius * $radius;
    }
}
