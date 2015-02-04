# elo-score-calculator

[![Build Status (Scrutinizer)](https://scrutinizer-ci.com/g/Jleagle/elo-score-calculator/badges/build.png)](https://scrutinizer-ci.com/g/Jleagle/elo-score-calculator)
[![Code Quality (scrutinizer)](https://scrutinizer-ci.com/g/Jleagle/elo-score-calculator/badges/quality-score.png)](https://scrutinizer-ci.com/g/Jleagle/elo-score-calculator)
[![Latest Stable Version](https://poser.pugx.org/Jleagle/elo-score-calculator/v/stable.png)](https://packagist.org/packages/Jleagle/elo-score-calculator)
[![Latest Unstable Version](https://poser.pugx.org/Jleagle/elo-score-calculator/v/unstable.png)](https://packagist.org/packages/Jleagle/elo-score-calculator)

Calculate expected score and new ELO score

## Usage

Add Elo to your `composer.json`

```
{
    "require": {
        "jleagle/elo-score-calculator": "*"
    }
}
```

Download the package

```
$ php composer.phar update jleagle/elo-score-calculator
```
    
Give Elo the players current scores and who won/lost/drew

```php
$elo = new Elo(
  90, 60, Elo::WIN, Elo::LOST
);

$elo = new Elo(
  90, 90, Elo::DRAW, Elo::DRAW
);
```

Get the chance of each player winning

```php
$expectedScore = $elo->getExpected();
```

Get the players new scores

```php
$newRatings = $elo->getRatings();
```
