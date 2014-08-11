PHPELO
======

Calculate expected score and new ELO score 

    $elo = new \Jleagle\PHPELO\PHPELO(
      100, 100, \Jleagle\PHPELO\PHPELO::WIN, \Jleagle\PHPELO\PHPELO::LOST
    );
    
    $expectedScore = $elo->getExpected();
    
    $newRatings = $elo->getRatings();