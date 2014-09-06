<?php
class PHPELOTest extends PHPUnit_Framework_TestCase
{

  public function testPHPELO()
  {

    $elo = new \Jleagle\PHPELO(
      100, 100, \Jleagle\PHPELO::WIN, \Jleagle\PHPELO::LOST
    );

    $this->assertInstanceOf('\Jleagle\PHPELO', $elo);
    $this->assertEquals(array('a' => 0.5, 'b' => 0.5), $elo->getExpected());
    $this->assertEquals(array('a' => 108, 'b' => 92), $elo->getRatings());

  }

}
