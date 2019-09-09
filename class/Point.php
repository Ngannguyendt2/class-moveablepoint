<?php


class Point
{
protected $x;
protected $y;

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }
    public function getXY(){
        $array=[];
        array_push($array,$this->getX());
        array_push($array,$this->getY());
        return $array;
    }
    public function setXY($x,$y){
        $this->y=$y;
        $this->x=$x;
    }
    public function toString(){
        return "(x,y): ".var_dump($this->getXY());
    }
}