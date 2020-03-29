# Distance-Calculator
## Description
Distance-Calculator is a lightweight plugin that allow you to get the exact distance between two geo coordinates.
## How to Install
**composer require distance/calculator**
## How to integrate in laravel 
Add the following line to your controller
`use m2Dev\distance\distance;`
## How to use
The function use 3 variable : The start point {{ $start }} and End point {{ $end }} and at last the option {{ $opt }} .
The option variable must be one of the next :
* **k** For Kilometers
* **m** For Meters
* **cm** For Centimeters
* **mi** For Miles
* **y** For Yard
* **f** For Feet
* **i** For Inch
> The start and end points can be a string that contains the latitude and the longitud separated by a "," or it can be an array . 
* Example :
* `$start = "36.7948624,10.0732379";`
* `$lat = "36.8762761"; $lng = "10.2538732";`
* `$end = array($lat,$lng);`
* `$opt = "k";`
* `$GPS = new distance();`
* `$GPS->gpsCord($start,$end,$opt)`

***
> This is a simple and useful plugin , so many features will be added .
