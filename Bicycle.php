<?php
    require_once 'Vehicle.php';
    require_once 'LightableInterface.php';

    class Bicycle extends Vehicle implements LightableInterface
    {
        public function switchOn(): bool
        {
            // retourne true seulement si la currentSpeed() est >10km/h
            if ($this->getCurrentSpeed()>10){
                return true;
            }
        }
    
        public function switchOff(): bool
        {
            // retourne toujours false
            return false;
        }
    }
    
?>