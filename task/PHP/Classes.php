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
        }

        public function getCountry(){
            return $this->country;
        }

        public function getName(){
            return $this->name;
        }
    }

    class Group
    {
        private $name;
        private $teams = array();

        public function __construct($name, $group = NULL){
            $this->name = $name;
            if(isset($group)){
                foreach($group->getTeams() as $team){
                    $this->addTeam($team);
                }
            }
        }

        public function addTeam(Team $team){
            array_push($this->teams, $team);
            return $this;
        }

        private function getTeams(){
            return $this->teams;
        }

        public function generateCalendar(){
            $teams = $this->getTeams();
            for($i = 0; $i < count($teams) - 1; $i++){
                echo($i + 1 . " тур </br>");
                for($j = $i + 1; $j < count($teams);$j++){
                    echo($teams[$i]->getName() . " - " . $teams[$j]->getName() . "</br>");
                }
            }
        }
    }

?>