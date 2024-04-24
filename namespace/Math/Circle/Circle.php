<?php

namespace Math\Circle;

use Math\Constant;
use DateTime;

require_once __DIR__ . '/../Constant.php';

function strlen($str)
{
    echo $str;
    return \strlen($str) - 1;
}




class Circle
{
    public function getAreaCicle($radius)
    {
        return Constant::PI * $radius * $radius;
    }

    public function getTimeStamp()
    {
        $dateTime = new DateTime();
        return $dateTime->getTimestamp();
    }
}
