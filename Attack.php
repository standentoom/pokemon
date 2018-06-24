<?php 

class Attack{

public $Name;
public $AttackPoints;


public function __construct($nme, $attack_points)
{
        $this->Name = $nme;
        $this->AttackPoints = $attack_points;
}

public function Execute($target){

    if ($target == null){
        echo 'Cannot execute Attack; target is null';
    }

    if(gettype($target) != "Pokemon"){

        die('cannot execute Attack; Target is not of type Pokemon ('. gettype($target) . ')');
    }

    $target->DoDamage($this->AttackPoints);

}

}