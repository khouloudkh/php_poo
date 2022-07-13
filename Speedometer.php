<?php

class Speedometer {
    public static function KMtoMILES(float $distance): float
    {
        return $distance/1.60934;
    }

    public static function MILEStoKM(float $distance): float
    {
        return $distance*1.60934;
    }
}

?>