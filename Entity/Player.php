<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 21/11/13
 * Time: 18:12
 */

namespace soccerMatchSimulator\Entity;


class Player {

    protected $shot = 0;
    protected $shortPass = 0;
    protected $longPass = 0;
    protected $defense = 0;
    protected $speed = 0;

    function __construct($attributes)
    {
        foreach($attributes as $key => $value)
        {
            if (isset($this->{$key}))
            {
                $this->$key = $value;
            }
        }
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $shot
     */
    public function setShot($shot)
    {
        $this->shot = $shot;
    }

    /**
     * @return mixed
     */
    public function getShot()
    {
        return $this->shot;
    }

    /**
     * @param mixed $shortPass
     */
    public function setShortPass($shortPass)
    {
        $this->shortPass = $shortPass;
    }

    /**
     * @return mixed
     */
    public function getShortPass()
    {
        return $this->shortPass;
    }

    /**
     * @param mixed $longPass
     */
    public function setLongPass($longPass)
    {
        $this->longPass = $longPass;
    }

    /**
     * @return mixed
     */
    public function getLongPass()
    {
        return $this->longPass;
    }

    /**
     * @param mixed $defense
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    /**
     * @return mixed
     */
    public function getDefense()
    {
        return $this->defense;
    }


}