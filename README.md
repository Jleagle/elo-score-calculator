PHPELO
======

Calculate expected score and new ELO score

[![Build Status](https://travis-ci.org/Jleagle/php-elo-rating-system.svg?branch=master)](https://travis-ci.org/jleagle/php-elo-rating-system)
[![Total Downloads](https://poser.pugx.org/jleagle/php-elo-rating-system/downloads.svg)](https://packagist.org/packages/jleagle/php-elo-rating-system)

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
  100, 100, PHPELO::WIN, PHPELO::LOST
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