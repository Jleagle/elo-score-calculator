<?php
namespace Jleagle\PHPELO;

class PHPELO
{

    private $kFactor = 16;

    private $ratingA;
    private $ratingB;
    private $scoreA;
    private $scoreB;
    private $expectedA;
    private $expectedB;
    private $newRatingA;
    private $newRatingB;

    public function  __construct($ratingA, $ratingB, $scoreA, $scoreB)
    {

        $this->ratingA = $ratingA;
        $this->ratingB = $ratingB;
        $this->scoreA = $scoreA;
        $this->scoreB = $scoreB;

        // Get expected scores
        $this->expectedA = 1 / (1 + (pow(10, ($this->ratingB - $this->ratingA) / 400)));
        $this->expectedB = 1 / (1 + (pow(10, ($this->ratingA - $this->ratingB) / 400)));

        // Get new ratings
        $this->newRatingA = $this->ratingA + ($this->kFactor * ($this->scoreA - $this->expectedA));
        $this->newRatingB = $this->ratingB + ($this->kFactor * ($this->scoreB - $this->expectedB));

    }

    public function getExpected()
    {
        return array (
            'a' => $this->expectedA,
            'b' => $this->expectedB
        );
    }

    public function getRatings()
    {
        return array (
            'a' => $this->newRatingA,
            'b' => $this->newRatingB
        );
    }

}