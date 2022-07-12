<?php

    class Car{

        //Attributs
        private int $nbWheels = 4;
        private int $currentSpeed = 0;
        private string $color = 'white';
        private int $nbSeats = 5;
        private string $energy = 'gasoline';
        private int $energyLevel = 0;

        //Constructeur
        public function __construct(string $color, int $nbSeats, string $energy)
        {
            $this->color = $color;
            $this->nbSeats = $nbSeats;
            $this->energy = $energy;
        }

        //Méthodes
        public function start() : string
        {
            $this->currentSpeed = 0;
            return 'go!';
        }

        public function forward() : string
        {
            $this->currentSpeed = 80;
            return "go !";
        }

        public function brake() : string
        {
            $this->currentSpeed = 150;
            $sentence = "";

            while($this->currentSpeed > 0){
                $this->currentSpeed--;
                $sentence .= "Brake !!!";
            }

            $sentence .= "I'm stopped !";
            return $sentence;
        }

        //Getters
        public function getNbWheels () : int
        {
            return $this->nbWheels;
        }

        public function getCurrentSpeed () : int
        {
            return $this->currentSpeed;
        }

        public function getColor () : string
        {
            return $this->color;
        }

        public function getNbSeats () : int
        {
            return $this->nbSeats;
        }

        public function getEnergy () : string
        {
            return $this->energy;
        }

        public function getEnergyLevel () : int
        {
            return $this->energyLevel;
        }
        
    }
?>