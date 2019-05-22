# Japanese Era
Convert to date of Japanese Era Format from UNIX timestamp.


## Description
It corresponds to the era after "Meiji Era". (Included "Reiwa Era")
Otherwise, it will output the Christian year.

## Setup
```
git clone git@github.com:igramjp/japanese-era.git
```

## Usage
```php
$unixTimestamp = time();

$japaneseEra = new JapaneseEra($unixTimestamp);
echo $japaneseEra->getDate();
```

## Lisence
This software is released under the MIT License, see LICENSE.

## Author
Manabu Igarashi
