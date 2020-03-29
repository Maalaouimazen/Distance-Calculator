# Distance-Calculator
## Description
Distance-Calculator is a lightweight plugin that allow you to get the exact distance between two geo coordinates.
## How to Install
**composer require distance/calculator**
## How to integrate in laravel
Add the following line to your controller
``` php
use m2Dev\Distance\DistanceCalculator;
```
## Usage
The options available :
* **k** For Kilometers
* **m** For Meters
* **cm** For Centimeters
* **mi** For Miles
* **y** For Yard
* **f** For Foot
* **i** For Inch

***

``` php
  use m2Dev\Distance\DistanceCalculator;

  $opt = "k";
  $GPS = new Distance();
  $GPS->SetStartingFrom(36.7948624,10.0732379);
  $GPS->SetEndingAt(36.8762761,10.2538732);
  $GPS->getDistance($opt);
```

***
> This is a simple and useful plugin , so many features will be added .
