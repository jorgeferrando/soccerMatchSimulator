<?php
/**
 * User: Jorge
 * Date: 21/11/13
 * Time: 16:37
 */

namespace soccerMatchSimulator\Entity;

use soccerMatchSimulator\Entity\Goal;
use soccerMatchSimulator\Entity\Player;

class SoccerField {
    protected $field;
    protected $leftGoal;
    protected $rightGoal;

    public function __construct($with,$length,Goal $rightGoal,Goal $leftGoal)
    {
        $this->initializeField($with,$length);
        $this->setLeftGoal($leftGoal);
        $this->setRightGoal($rightGoal);
    }

    protected function initializeField($with =  5,$length = 10)
    {
        $this->field = array($length);
        foreach($this->field as $row) {
            $row = array($with);
        }
    }

    /**
     * @param array $field
     */
    public function setField($field)
    {
        $this->field = $field;
    }

    /**
     * @return array
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param Goal $goal
     */
    public function setLeftGoal($goal)
    {
        $this->leftGoal = $goal;
    }

    /**
     * @param Goal $goal
     */
    public function setRightGoal($goal)
    {
        $this->rigthGoal = $goal;
    }

    /**
     * @return mixed
     */
    public function getLeftGoal()
    {
        return $this->leftGoal;
    }

    /**
     * @return mixed
     */
    public function getRightGoal()
    {
        return $this->rightGoal;
    }

}