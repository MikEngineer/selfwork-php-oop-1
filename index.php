<?php

// Classe
class Company{

    // Attributi
    public $name;
    public $location;
    public $tot_employees;

    // Attributi Statici

    public static $avg_salary = 1500;
    public static $total = 0;

    // Metodi
    public function __construct($_name, $_location, $_tot_employees){
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
    }

    public function checkIfGreater($int1, $int2){
        if($int1 > $int2){
            return true;
        }
        return false;
    }

    public function printCheckEmployees($num = 0){
        if($this->checkIfGreater($this->tot_employees, $num)){
            echo "La società " . $this->name . " con sede in " . $this->location . " ha ben " . $this->tot_employees . " dipendenti.\n";
        }else{
            echo "La società " . $this->name . " con sede in " . $this->location . " non ha dipendenti.\n";
        }
    }

    public function calculateAnnualCost($int){ //$int sarà 12 come i mesi dell'anno
        return $this->tot_employees * (self::$avg_salary * $int);
    }

    public function printCalculatedAnnualCost($month = 12){
        echo "-----" . $this->name . "-----\n";
        echo "Il costo annuale della società " .  $this->name . " è di " . $this->calculateAnnualCost($month) . " euro\n";
    }
    
    public function calculateProgressiveCost($month = 12){
        return self::$total += $this->calculateAnnualCost($month);
    }

    // Metodi statici

    public static function printCalculatedFinalTotal(){
        echo "La Holding ha una previsione di spesa pari a: " . self::$total . "\n";
    }

}

$aulab = new Company('Aulab', 'Italia', 50);
$apple = new Company('Apple', 'USA', 137000);
$stopGo = new Company('Stop&Go', 'Italia', 7);
$vW = new Company('Volkswagen', 'Germania', 671205);
$truffa = new Company('Truffa', 'Italia', 0);

$aulab->printCheckEmployees();
$apple->printCheckEmployees();
$stopGo->printCheckEmployees();
$vW->printCheckEmployees();
$truffa->printCheckEmployees();

$aulab->calculateProgressiveCost();
$apple->calculateProgressiveCost();
$stopGo->calculateProgressiveCost();
$vW->calculateProgressiveCost();
$truffa->calculateProgressiveCost();

$aulab->printCalculatedAnnualCost();
$apple->printCalculatedAnnualCost();
$stopGo->printCalculatedAnnualCost();
$vW->printCalculatedAnnualCost();
$truffa->printCalculatedAnnualCost();


Company::printCalculatedFinalTotal();

?>