PHPELO
======

[![Build Status (Scrutinizer)](https://scrutinizer-ci.com/g/Jleagle/elo-score-calculator/badges/build.png)](https://scrutinizer-ci.com/g/Jleagle/elo-score-calculator)
[![Code Quality (scrutinizer)](https://scrutinizer-ci.com/g/Jleagle/elo-score-calculator/badges/quality-score.png)](https://scrutinizer-ci.com/g/Jleagle/elo-score-calculator)
[![Latest Stable Version](https://poser.pugx.org/Jleagle/elo-score-calculator/v/stable.png)](https://packagist.org/packages/Jleagle/elo-score-calculator)
[![Latest Unstable Version](https://poser.pugx.org/Jleagle/elo-score-calculator/v/unstable.png)](https://packagist.org/packages/Jleagle/elo-score-calculator)

Calculate expected score and new ELO score

## Usage

Add PHPELO to your `composer.json`

```
{
    "require": {
        "jleagle/php-elo-rating-system": "*"
    }
}
```

Download the package

```
$ php composer.phar update jleagle/php-elo-rating-system
```
    
Give PHPELO the players current scores and who won/lost/drew

```php
$elo = new PHPELO(
  90, 60, PHPELO::WIN, PHPELO::LOST
);

$elo = new PHPELO(
  90, 90, PHPELO::DRAW, PHPELO::DRAW
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
