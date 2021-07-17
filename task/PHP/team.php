<?php

    class Team
    {
        private $name;
        private $country;

        public function __construct($name){
            $this->name = $name;
        }

        public function setCountry($country){
            $this->country = $country;
            return $this;
        }

        public function getCountry(){
            return $this->country;
        }

        public function getName(){
            return $this->name;
        }
    }