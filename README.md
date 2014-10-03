PHPELO
======

[![Build Status (Travis)](https://img.shields.io/travis/Jleagle/elo-score-calculator/master.svg)](https://travis-ci.org/Jleagle/elo-score-calculator/builds)
[![Code Quality (scrutinizer)](https://scrutinizer-ci.com/g/Jleagle/elo-score-calculator/badges/quality-score.png)](https://scrutinizer-ci.com/g/Jleagle/elo-score-calculator)
[![Dependency Status (versioneye.com)](https://www.versioneye.com/php/Jleagle:elo-score-calculator/badge.png)](https://www.versioneye.com/php/Jleagle:elo-score-calculator)
[![Downloads Total](https://poser.pugx.org/Jleagle/elo-score-calculator/downloads.svg)](https://packagist.org/packages/Jleagle/elo-score-calculator)

Calculate expected score and new ELO score

## Usage

Add PHPELO to your `composer.json`

```
{
    "require": {
        "jleagle/php-elo-rating-system": "dev-master"
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
