<?php

include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleTwo)
    {
        $circleTwoRadius = $circleTwo->getRadius();
        if ($this->radius() > $circleTwoRadius) {
            return 1;
        } else if ($this->radius < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}