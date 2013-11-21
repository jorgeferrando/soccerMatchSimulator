<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 21/11/13
 * Time: 18:27
 */

namespace soccerMatchSimulator\Entities;


class Goal {
    protected $possibilities;
    protected $goalkeeper;

    function __construct($width,$height, $goalkeeper = null)
    {
        $this->goalkeeper = $goalkeeper;
        if($goalkeeper !== null)
        {
            for($i = 0;$i<$width;$width++)
            {
                for($j = 0;$j<$height;$j++)
                {
                    $this->setPossibility($goalkeeper,$i,$j);
                }
            }
        }
    }

    /**
     * @param $goalkeeper
     * @param $i
     * @param $j
     *
     * set the possibility has the goalkeeper to stop a shot in this area of the goal.
     */
    private function setPossibility($goalkeeper,$i,$j)
    {
        $this->possibilities[$i][$j] = ($goalkeeper->defense/100) * 0.05 ; //TODO: here goes a formula to do this.
    }
} 