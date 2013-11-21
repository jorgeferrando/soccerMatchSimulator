<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 21/11/13
 * Time: 18:12
 */

namespace soccerMatchSimulator\Entities;


class Player {

    protected $shot;
    protected $shortPass;
    protected $longPass;
    protected $defense;
    protected $speed;

    function __construct($attributes)
    {
        foreach($attributes as $key => $value)
        {
            if (isset($this->{$key}))
            {
                $this->{$key} = $value;
            }
        }
    }
}