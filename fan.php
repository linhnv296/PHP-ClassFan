<?php


class Fan{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5;
    private $color = "blue";

    /**
     * @return bool
     */
    public function isOn($onoff)
    {
        if ($onoff == "on"){
            $this->on = true;
        }else{
            $this->on=false;
        }
    }
    public function getisOn(){
        return $this->on;
    }
    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        if ($speed==2){
            $this->speed = self::MEDIUM;
        }elseif ($speed==3){
            $this->speed = self::FAST;
        }else{
            $this->speed = self::SLOW;
        }

    }
    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    public function toString(){
        $toStr = "Speed: ".$this->getSpeed()." Radius: ".$this->getRadius()." Color: ".$this->getColor()." Status: ".$this->getisOn();
        return $toStr;
    }
}