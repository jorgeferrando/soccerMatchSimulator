<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 21/11/13
 * Time: 18:27
 */

namespace soccerMatchSimulator\Entity;


class Goal {
    protected $possibilities;
    protected $goalkeeper;

    function __construct($width,$height, $goalkeeper = null)
    {
        $this->possibilities = array();
        $this->goalkeeper = $goalkeeper;

        for($i = 0;$i<$width;$i++)
        {
            for($j = 0;$j<$height;$j++)
            {
                $this->setPossibility($goalkeeper,$i,$j);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getPossibilities()
    {
        return $this->possibilities;
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
        $this->possibilities[$i][$j] = ($goalkeeper->getDefense()/100) * 0.5 ; //TODO: here goes a formula to do this.
    }
} 