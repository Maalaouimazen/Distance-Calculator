<?php
namespace m2Dev\distance;
class distance
{
    public function gpsCord($from, $to ,$opt)
    {
        $res = null;
        if(empty($from)) return "Please add the start point coordinates";
        if(empty($to)) return "Please add the end point coordinates";
        if(!is_array($from)):
          $from = explode(',',$from);
        endif;
        $latitudeFrom  = $from[0];
        $longitudeFrom = $from[1];
        if(!is_array($from)):
          $to = explode(',',$to);
        endif;
        $latitudeTo    = $to[0];
        $longitudeTo   = $to[1];
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
        $cm    = $m * 1000;
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
