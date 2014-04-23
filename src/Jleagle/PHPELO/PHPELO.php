<?php
namespace Jleagle\PHPELO;

class PHPELO
{

    private $kFactor;

    private $expectedA;
    private $expectedB;
    private $newRatingA;
    private $newRatingB;

    public function  __construct($ratingA, $ratingB, $scoreA, $scoreB, $kFactor = 16)
    {

        $this->kFactor = $kFactor;

        // Get expected scores
        $this->expectedA = $this->makeExpected($ratingB, $ratingA);
        $this->expectedB = $this->makeExpected($ratingA, $ratingB);

        // Get new ratings
        $this->newRatingA = $this->makeNewRating($ratingA, $scoreA, $this->expectedA);
        $this->newRatingB = $this->makeNewRating($ratingB, $scoreB, $this->expectedB);

    }

    private function makeExpected($x, $y)
    {
        return 1 / (1 + (pow(10, ($x - $y) / 400)));
    }

    private function makeNewRating($x, $y, $z)
    {
        return $x + ($this->kFactor * ($y - $z));
    }

    public function getExpected()
    {
        return array(
            'a' => $this->expectedA,
            'b' => $this->expectedB
        );
    }

    public function getRatings()
    {
        return array(
            'a' => $this->newRatingA,
            'b' => $this->newRatingB
        );
    }

}