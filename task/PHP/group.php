<?php
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

        public function addTeam($team){
            array_push($this->teams, $team);
            return $this;
        }

        private function getTeams(){
            return $this->teams;
        }

        public function generateCalendar(){
            if(count($this->teams)%2 != 0){
                array_push($this->teams, (new Team(""))->setCountry(""));
            }


            $teamsCount = count($this->teams);
            for($i = 0; $i < $teamsCount - 1; $i++){
                echo $this->name . ". Round " . $i+1 . "</br>";
                for($j = 0; $j < $teamsCount / 2; $j++){
                    if($this->teams[$j]->getName() == "" || $this->teams[$teamsCount - 1 - $j]->getName() == "" ){
                        continue;
                    }
                    echo $this->teams[$j]->getName()
                    ."(" . $this->teams[$j]->getCountry() . ") - "
                    .$this->teams[$teamsCount - 1 - $j]->getName()
                    ."(" . $this->teams[$j]->getCountry() . ")"
                    ."</br>";
                }
                echo ("</br>");
                $first = array_shift($this->teams);
                $last = array_pop($this->teams);

                array_unshift($this->teams, $first, $last);
            }
        }
    }