<?php
namespace Simplexi\distance;
class distance
{
    public function Km(String $from, String $to)
    {
        	$from = explode(',',$from);
        	$to = explode(',',$to);
            $latitudeFrom  = $from[0];
            $longitudeFrom = $from[1] ;
            $latitudeTo    = $to[0]; 
            $longitudeTo   = $to[1];
            $theta    = $longitudeFrom - $longitudeTo;
            $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
            $dist    = acos($dist);
            $dist    = rad2deg($dist);
            $km    = $dist * 60 * 1.1515;
            return round($km * 1.609344, 2);
    }
    public function M(String $from, String $to)
    {
        	$from = explode(',',$from);
        	$to = explode(',',$to);
            $latitudeFrom  = $from[0];
            $longitudeFrom = $from[1] ;
            $latitudeTo    = $to[0]; 
            $longitudeTo   = $to[1];
            $theta    = $longitudeFrom - $longitudeTo;
            $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
            $dist    = acos($dist);
            $dist    = rad2deg($dist);
            $m    = $dist * 60 * 1.1515 * 1000;
            return round($m * 1.609344, 2);
    }
}