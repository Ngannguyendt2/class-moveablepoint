<?php



class MoveablePoint extends Point
{
 protected $xSpeed;
 protected $ySpeed;
 public function moveAble($x,$y,$xSpeed,$ySpeed){
     $this->x=$x;
     $this->y=$y;
     $this->xSpeed=$xSpeed;
     $this->ySpeed=$ySpeed;
 }
 public function movepoint($xSpeed,$ySpeed){
     $this->xSpeed=$xSpeed;
     $this->ySpeed=$ySpeed;
 }


    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }
    public function getSpeed(){
        $array=[];
        array_push($array,$this->getXSpeed());
        array_push($array,$this->getYSpeed());
    }
    public function move(){

    }
    public function toString(){
        return "(xspeed,yspeed)".$this->getSpeed();
    }
}