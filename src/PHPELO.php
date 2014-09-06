<?php
namespace Jleagle;

class PHPELO
{

  const WIN = 1;
  const LOST = 0;
  const DRAW = 0.5;

  private $_kFactor;
  private $_expectedA;
  private $_expectedB;
  private $_newRatingA;
  private $_newRatingB;

  /**
   * @param int $ratingA - Player A's original score
   * @param int $ratingB - Player B's original score
   * @param int $scoreA  - Player A's WIN/LOSE/DRAW
   * @param int $scoreB  - Player B's WIN/LOSE/DRAW
   * @param int $kFactor
   */
  public function  __construct($ratingA, $ratingB, $scoreA, $scoreB, $kFactor = 16)
  {
    $this->_kFactor = $kFactor;

    $this->_expectedA = $this->_makeExpected($ratingB, $ratingA);
    $this->_expectedB = $this->_makeExpected($ratingA, $ratingB);

    $this->_newRatingA = $this->_makeNewRating($ratingA, $scoreA, $this->_expectedA);
    $this->_newRatingB = $this->_makeNewRating($ratingB, $scoreB, $this->_expectedB);
  }

  /**
   * @param int $x
   * @param int $y
   *
   * @return float
   */
  private function _makeExpected($x, $y)
  {
    return 1 / (1 + (pow(10, ($x - $y) / 400)));
  }

  /**
   * @param int   $x
   * @param int   $y
   * @param float $z
   *
   * @return mixed
   */
  private function _makeNewRating($x, $y, $z)
  {
    return $x + ($this->_kFactor * ($y - $z));
  }

  /**
   * @return float[]
   */
  public function getExpected()
  {
    return array(
      'a' => $this->_expectedA,
      'b' => $this->_expectedB
    );
  }

  /**
   * @return float[]
   */
  public function getRatings()
  {
    return array(
      'a' => $this->_newRatingA,
      'b' => $this->_newRatingB
    );
  }

}