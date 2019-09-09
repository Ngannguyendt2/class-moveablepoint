<?php
include_once "class/Point.php";
include_once "class/MoveablePoint.php";
$point =new Point();
$ablePoint=new MoveablePoint();

$point->setXY(5.4,5.3);
echo $point->toString()."<br>";
$ablePoint->setSpeed(43,34);
echo $point->toString();
