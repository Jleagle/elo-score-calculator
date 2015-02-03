<?php
use Jleagle\Elo\Elo;

class EloTest extends PHPUnit_Framework_TestCase
{
  public function testPHPELO()
  {
    $elo = new Elo(
      100, 100, Elo::WIN, Elo::LOST
    );

    $this->assertEquals(['a' => 0.5, 'b' => 0.5], $elo->getExpected());
    $this->assertEquals(['a' => 108, 'b' => 92], $elo->getRatings());
  }
}
