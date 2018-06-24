<?php 

class Weakness{


    public $EnergyType;
    public $Multiplier;

    public function __construct($et, $m)
    {
        $this->EnergyType = $et;
        $this->Multiplier = $m;
    }
}