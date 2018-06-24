<?php

require 'pokemon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

printVar(Pokemon::$Counter);

$g = new pokemon("Pikachu", 60, "lightning");
$g->Weakness = new Weakness("Fire", 1.5);
$g->Resistance = new Resistance("Fighting", 20);
$g->Attacks[] = new Attack("Electric Ring", 50);
$g->Attacks[] = new Attack("Pika Punch", 20);

printVar($g);

$t = new Pokemon("Charmeleon", 60, "Fire");
$t->Weakness = new Weakness("Water", 2);
$t->Resistance = new Resistance("Lightning", 10);
$t->Attacks[] = new Attack("Head Butt", 10);
$t->Attacks[] = new Attack("Flare", 30);

printVar($t);



printVar("Valt " . $t->Name . ' aan met ' . $g->Attacks[0]->Name);
printVar("Valt " . $g->Name . " aan met " . $t->Attacks[1]->Name);
    


print ("Pikachu Health nu : ");
printVar($g->Health - ($t->Attacks[1]->AttackPoints * $g->Weakness->Multiplier ));
print("Charmeleon Health nu : ");
printVar($t->Health - ($g->Attacks[0]->AttackPoints - $t->Resistance->Value) );

//x printVar($t->Attacks[1]->AttackPoints);



//printVar($t);

function printVar($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}
