PHPELO
======

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
  100, 100, PHPELO::WIN, PHPELO::LOST
);
```

Get the chance of each player winning

```
$expectedScore = $elo->getExpected();
```

Get the players new scores

```
$newRatings = $elo->getRatings();
```