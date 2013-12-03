<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 3/12/13
 * Time: 13:44
 */

namespace soccerMatchSimulator\Tests;

require('Player.php');
require('Goal.php');


use soccerMatchSimulator\Entity;

class GoalTest extends \PHPUnit_Framework_TestCase {
    public function testGoalConstructor()
    {
        $goalkeeper = new Entity\Player(['defense' => 70]);
        $testGoal = new Entity\Goal(7,3,$goalkeeper);

        $probabilities = $testGoal->getPossibilities();

        $this->assertEquals(7,count($probabilities));
        foreach($probabilities as $p)
        {
            $this->assertEquals(3,count($p));
            foreach($p as $value) {
                $this->assertEquals(0.35,$value);
            }
        }
    }
}
 