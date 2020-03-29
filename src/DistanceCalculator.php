<?php
namespace m2Dev\Distance;
class Distance
{
    protected $startPoint;
    protected $endPoint;

    public function SetStartingFrom(float $lat, float $lng)
    {
      $this->startPoint = [$lat,$lng];
    }
    public function GetStartingFrom()
    {
      return $this->startPoint;
    }
    public function SetEndingAt(float $lat, float $lng)
    {
      $this->endPoint = [$lat,$lng];
    }
    public function GetEndingAt()
    {
      return $this->endPoint;
    }
    public function getDistance($opt=null)
    {
        $res = null;
        $latitudeFrom  = $this->GetStartingFrom()[0];
        $longitudeFrom = $this->GetStartingFrom()[1];
        $latitudeTo    = $this->GetEndingAt()[0];
        $longitudeTo   = $this->GetEndingAt()[1];
        $theta    = $longitudeFrom - $longitudeTo;
        $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
        $dist    = acos($dist);
        $dist    = rad2deg($dist);
        $mi    = $dist * 60 * 1.1515;
        $y = $mi * 1760;
        $in = $mi * 63360;
        $f = $mi * 5280;
        $km    = $mi * 1.609344;
        $m    = $km * 1000;
        $cm    = $m * 100;
        switch ($opt) {
          case 'k':
            $res = round($km,2);
            break;
          case 'mi':
            $res = round($mi,2);
            break;
          case 'm':
            $res = round($m,2);
            break;
          case 'cm':
            $res = round($cm,2);
            break;
          case 'y':
              $res = round($y,2);
            break;
          case 'i':
              $res = round($in,2);
            break;
          case 'f':
              $res = round($f,2);
            break;
          default:
           $res = round($km,2);
        }
        return $res;
    }
}
