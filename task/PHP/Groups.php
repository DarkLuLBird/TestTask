<?php
    require ('Classes.php');

    $team1 = new Team("Team 1");
    $team1->setCountry('Country 1');

    $team2 = new Team("Team 2");
    $team2->setCountry('Country 2');

    $team3 = new Team("Team 3");
    $team3->setCountry('Country 3');

    $team4 = new Team("Team 4");
    $team1->setCountry('Country 4');

    $group1 = new Group("Group A");
    $group1
        ->addTeam($team1)
        ->addTeam($team2)
        ->addTeam($team3)
        ->addTeam($team4);

    $team5 = new Team("Team 5");
    $team5->setCountry('Country 5');

    $team6 = new Team("Team 6");
    $team6->setCountry('Country 6');

    $team7 = new Team("Team 7");
    $team7->setCountry('Country 7');

    $group2 = new Group("Group B", $group1);
    $group2
        ->addTeam($team5)
        ->addTeam($team6)
        ->addTeam($team7);

