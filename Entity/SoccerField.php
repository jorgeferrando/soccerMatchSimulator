<?php
/**
 * User: Jorge
 * Date: 21/11/13
 * Time: 16:37
 */

namespace soccerMatchSimulator\Entity;

class SoccerField {
    protected $field;
    protected $goals;

    public function __construct($with,$length,$goals = array())
    {
        $this->initializeField($with,$length);
        $this->goals = $goals;
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
     * @param mixed $goal
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;
    }

    /**
     * @return mixed
     */
    public function getGoals()
    {
        return $this->goals;
    }

}